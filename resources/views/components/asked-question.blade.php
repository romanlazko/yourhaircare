@props(['question' => ''])

<div class="w-full space-y-4" x-data="{ open: false }">
    <div class="w-full flex space-x-4 items-center cursor-pointer" x-on:click="open = ! open">
        <div class="h-[24px] w-[24px] aspect-square flex items-center justify-center rounded-full bg-gold">
            <i class="fa-solid fa-plus" x-show="!open" x-transition></i>
            <i class="fa-solid fa-xmark" x-show="open" x-transition></i>
        </div>
        <p class="text-[22px]" :class="open ? 'text-[#FEF998]' : 'text-[#FFFDD8]'">
            {{ $question }}
        </p>
    </div>
    <div x-show="open" x-transition {{ $attributes->merge(['class' => 'text-[18px] ml-10 text-[#FFFDD8]']) }}>
        {{ $slot }}
    </div>
</div>