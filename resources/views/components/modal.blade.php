@props([
    'name',
    'show' => false,
    'maxWidth' => '4xl',
    'funcOnShow' => '',
    'id' => 'modal'
])

@php
$maxWidth = [
    'sm' => 'sm:max-w-sm',
    'md' => 'sm:max-w-md',
    'lg' => 'sm:max-w-lg',
    'xl' => 'sm:max-w-xl',
    '2xl' => 'sm:max-w-2xl',
    '4xl' => 'sm:max-w-4xl',
][$maxWidth];
@endphp

<div
    x-data="{
        show: @js($show),
        focusables() {
            // All focusable element types...
            let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'
            return [...$el.querySelectorAll(selector)]
                // All non-disabled elements...
                .filter(el => ! el.hasAttribute('disabled'))
        },
        firstFocusable() { return this.focusables()[0] },
        lastFocusable() { return this.focusables().slice(-1)[0] },
        nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
        prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
        nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
        prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) -1 },
    }"
    x-init="$watch('show', value => {
        if (value) {
            document.body.classList.add('overflow-y-hidden');
            {{ $attributes->has('focusable') ? 'setTimeout(() => firstFocusable().focus(), 100)' : '' }}
            
        } else {
            document.body.classList.remove('overflow-y-hidden');
        }
    })"
    x-on:open-modal.window="$event.detail == '{{ $name }}' ? show = true : null"
    x-on:close-modal.window="$event.detail == '{{ $name }}' ? show = false : null"
    x-on:close.stop="show = false"
    x-on:close.window="show = false"
    x-on:close-all-modal.window="show = false"
    x-on:keydown.escape.window="show = false"
    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()"
    class="fixed inset-0 overflow-y-auto px-2 py-6 z-50"
    id="{{$id}}"
    style="display: none"
    x-bind:style="show ? { display: 'block' } : { display: 'none' }"
>
    <div
        class="fixed inset-0 transform transition-all"
        x-on:click="show = false"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div
        class="flex-1 flex flex-col bg-[#001101] rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto z-50"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    >
        <div class="w-full">
            <div class="py-2 px-3 flex items-center space-x-3 justify-end">
                <div class="h-[24px] w-[24px] aspect-square flex items-center justify-center rounded-full bg-gold" x-on:click="$dispatch('close')">
                    <i class="fa-solid fa-xmark" ></i>
                </div>
            </div>
        </div>

        <div class="w-full h-1" style="background: url('/img/gold3.avif'); background-size: cover"></div>

        <div class="flex-1 overflow-x-hidden overflow-y-auto p-4 text-[#FFFDD8] font-[YsabeauInfant-Regular] space-y-8 py-8">
            <h2 class="text-2xl md:text-4xl uppercase font-[Cormorant] text-gold gold-animation">
                {{ $title }}
            </h2>
            <p class="text-gold">
                {{ $time }}
            </p>
            <div class="w-full flex space-x-3 justify-between">
                {{ $photos }}
            </div>
            <p class="">
                {{ $description }}
            </p>
            <p class="text-gold">
                {{ $price }}
            </p>
            <x-reservation-button/>
            <p class="text-[#b0af9b]">
                {{ __("* The final price and time depends on the thickness and length, you will receive a free consultation with a hairdresser if needed") }}
            </p>
        </div>
    </div>
</div>
