<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="scroll-behavior: smooth;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Your Hair Care</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/f4c6764ec6.js" crossorigin="anonymous"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="antialiased">
        <x-modal name="nanoplastics" maxWidth="lg">
            <x-slot name="title">
                {{ __("nanoplastics") }}
            </x-slot>

            <x-slot name="time">
                2,5-3 {{ __("hours") }}
            </x-slot>

            <x-slot name="photos">
                <div>
                    <img class="" src="img/photos/main_photo1.png" alt="">
                    <p>
                        {{ __("before") }}
                    </p>
                </div>
                <div>
                    <img class="" src="img/photos/main_photo1.png" alt="">
                    <p>
                        {{ __("after") }}
                    </p>
                </div>
            </x-slot>

            <x-slot name="description">
                {{ __("An innovative technique for straightening curls. An acid composition is used to achieve flawless straightening, even for Afro hair. Perfect for those who want to give their hair long-lasting smoothness and silkiness.") }}
            </x-slot>

            <x-slot name="price">
                {{ __("from") }} 1900,-
            </x-slot>
        </x-modal>

        <x-modal name="keratin" maxWidth="lg">
            <x-slot name="title">
                {{ __("keratin") }}
            </x-slot>

            <x-slot name="time">
                3-3,5 {{ __("hours") }}
            </x-slot>

            <x-slot name="photos">
                <div>
                    <img class="" src="img/photos/main_photo1.png" alt="">
                    <p>
                        {{ __("before") }}
                    </p>
                </div>
                <div>
                    <img class="" src="img/photos/main_photo1.png" alt="">
                    <p>
                        {{ __("after") }}
                    </p>
                </div>
            </x-slot>

            <x-slot name="description">
                {{ __("A hair straightening procedure based on the application of a special composition with keratin protein, which helps straighten the hair, reduce frizz, and provide a long-lasting effect. Suitable for those dreaming of straight, smooth hair.") }}
            </x-slot>

            <x-slot name="price">
                {{ __("from") }} 1600,-
            </x-slot>
        </x-modal>

        <x-modal name="afro_hair_extensions" maxWidth="lg">
            <x-slot name="title">
                {{ __("afro hair extensions") }}
            </x-slot>

            <x-slot name="time">
                3-3,5 {{ __("hours") }}
            </x-slot>

            <x-slot name="photos">
                <div>
                    <img class="" src="img/photos/main_photo1.png" alt="">
                    <p>
                        {{ __("before") }}
                    </p>
                </div>
                <div>
                    <img class="" src="img/photos/main_photo1.png" alt="">
                    <p>
                        {{ __("after") }}
                    </p>
                </div>
            </x-slot>

            <x-slot name="description">
                {{ __("This is a safe extension technique that uses a special material identical to natural hair. Attachment is done on a mini braid, weaving donor hair strands into the natural ones. An ideal option without tangles and glue.") }}
            </x-slot>

            <x-slot name="price">
                {{ __("from") }} 2000,-
            </x-slot>
        </x-modal>

        <x-modal name="botox" maxWidth="lg">
            <x-slot name="title">
                {{ __("botox") }}
            </x-slot>

            <x-slot name="time">
                3-3,5 {{ __("hours") }}
            </x-slot>

            <x-slot name="photos">
                <div>
                    <img class="" src="img/photos/main_photo1.png" alt="">
                    <p>
                        {{ __("before") }}
                    </p>
                </div>
                <div>
                    <img class="" src="img/photos/main_photo1.png" alt="">
                    <p>
                        {{ __("after") }}
                    </p>
                </div>
            </x-slot>

            <x-slot name="description">
                {{ __("This treatment involves saturating the upper cuticular layer of the hair with active components to restore its structure and add shine. This service is suitable for those with dry, brittle, or damaged hair. Ideal for combining with colouring and care.") }}
            </x-slot>

            <x-slot name="price">
                {{ __("from") }} 1400,-
            </x-slot>
        </x-modal>

        <x-modal name="cold_restoration" maxWidth="lg">
            <x-slot name="title">
                {{ __("cold restoration") }}
            </x-slot>

            <x-slot name="time">
                1-1,5 {{ __("hours") }}
            </x-slot>

            <x-slot name="photos">
                <div>
                    <img class="" src="img/photos/main_photo1.png" alt="">
                    <p>
                        {{ __("before") }}
                    </p>
                </div>
                <div>
                    <img class="" src="img/photos/main_photo1.png" alt="">
                    <p>
                        {{ __("after") }}
                    </p>
                </div>
            </x-slot>

            <x-slot name="description">
                <p>
                    {{ __("A therapeutic procedure for dry, dehydrated, and damaged hair. It includes deep-penetrating components to give the hair:") }}
                </p>
                <ul class="list-disc list-inside">
                    <li>
                        {{ __("Elasticity") }}
                    </li>
                    <li>
                        {{ __("Strength") }}
                    </li>
                    <li>
                        {{ __("Softness") }}
                    </li>
                </ul>
                <p>
                    {{ __("The hair becomes lively and healthy. At the same time, the hair structure remains the same, without the straightening and glossy effect.") }}
                </p>
            </x-slot>

            <x-slot name="price">
                {{ __("from") }} 1400,-
            </x-slot>
        </x-modal>

        <x-modal name="hair_polishing" maxWidth="lg">
            <x-slot name="title">
                {{ __("hair polishing") }}
            </x-slot>

            <x-slot name="time">
                1,5 {{ __("hours") }}
            </x-slot>

            <x-slot name="photos">
                <div>
                    <img class="" src="img/photos/main_photo1.png" alt="">
                    <p>
                        {{ __("before") }}
                    </p>
                </div>
                <div>
                    <img class="" src="img/photos/main_photo1.png" alt="">
                    <p>
                        {{ __("after") }}
                    </p>
                </div>
            </x-slot>

            <x-slot name="description">
                {{ __("Hair polishing involves the gentle removal of dry and damaged hair ends, giving them a healthy appearance. Suitable for all hair types.") }}
            </x-slot>

            <x-slot name="price">
                {{ __("from") }} 500,-
            </x-slot>
        </x-modal>

        <x-modal name="trimming_spa" maxWidth="lg">
            <x-slot name="title">
                {{ __("trimming + spa") }}
            </x-slot>

            <x-slot name="time">
                1 {{ __("hours") }}
            </x-slot>

            <x-slot name="photos">
                <div>
                    <img class="" src="img/photos/main_photo1.png" alt="">
                    <p>
                        {{ __("before") }}
                    </p>
                </div>
                <div>
                    <img class="" src="img/photos/main_photo1.png" alt="">
                    <p>
                        {{ __("after") }}
                    </p>
                </div>
            </x-slot>

            <x-slot name="description">
                {{ __("This procedure is a comprehensive service that includes trimming damaged ends with subsequent spa care for the hair. An optimal choice for those who want to quickly and effectively maintain hair care for their health and beauty.") }}
            </x-slot>

            <x-slot name="price">
                {{ __("from") }} 450,-
            </x-slot>
        </x-modal>

        <header class="w-full h-20 items-center flex justify-between font-[YsabeauInfant-Regular] font-bold bg-gold gold-animation px-4 sticky top-0 z-40">
            <ul class="w-full text-[#001101] text-base lg:text-xl xl:text-2xl md:flex items-center max-w-7xl hidden whitespace-nowrap justify-between m-auto">
                <li class="">
                    <a href="#about_us" class="cursor-pointer hover:underline">
                        {{ __("About us") }}
                    </a>
                </li>
                
                <li><span class="border border-[#C9A43D] h-max"></span></li>

                <li>
                    <a href="#services_prices" class="cursor-pointer hover:underline">
                        {{ __("Services & prices") }}
                    </a>
                </li>
                
                <li><span class="border border-[#C9A43D] h-max"></span></li>
                
                <li>
                    <a href="#frequently_asked_questions" class="cursor-pointer hover:underline">
                        {{ __("Questions") }}
                    </a>
                </li>

                <li><span class="border border-[#C9A43D] h-max"></span></li>

                <li>
                    <a href="#testimonial" class="cursor-pointer hover:underline">
                        {{ __("Testimonial") }}
                    </a>
                </li>

                <li><span class="border border-[#C9A43D] h-max"></span></li>
                
                <li>
                    <a href="" class="cursor-pointer hover:underline">
                        {{ __("Reservation system") }}
                    </a>
                </li>
                
                <li><span class="border border-[#C9A43D] h-max"></span></li>
                
                <li>
                    @if (app()->getLocale() == 'en')
                        <a class="cursor-pointer hover:underline" href="{{ route('language', 'cz') }}">
                            CZ
                        </a>
                    @else
                        <a class="cursor-pointer hover:underline" href="{{ route('language', 'en') }}">
                            EN
                        </a>
                    @endif
                </li>

                <li><span class="border border-[#C9A43D] h-max"></span></li>

                <li>
                    <a href="" class="inline-block cursor-pointer font-[Beautique-Light] text-[#001101]">
                        @yourhaircare_cz
                    </a>
                </li>
            </ul>
            
            <div class="w-full flex items-center justify-between md:hidden">
                <div x-data="{ menu: false }" class="relative z-50">
                    <button id="menu" href="#" @click="menu = ! menu" class="h-20 text-2xl">
                        <i class="fa-solid fa-bars" x-show="!menu" x-transition:enter.scale.80></i>
                        <i class="fa-solid fa-xmark text-3xl" x-show="menu" x-transition:enter.scale.80></i>
                    </button>
                
                    <div x-cloak x-show="menu" @click="menu = false" class="fixed inset-0 z-10 w-full h-full"></div>
                
                    <div x-cloak x-show="menu" class="w-[200px] absolute left-0 z-50 bg-[#001101] text-[#C9A43D]" id="menu">
                        <div class="text-gold gold-animation">
                            <a class="block w-full p-2 hover:text-[#fad56e]" href="#about_us">{{ __("About us") }}</a>
                            <a class="block w-full p-2 hover:text-[#fad56e]" href="#services_prices">{{ __("Services & prices") }}</a>
                            <a class="block w-full p-2 hover:text-[#fad56e]" href="#frequently_asked_questions">{{ __("Questions") }}</a>
                            <a class="block w-full p-2 hover:text-[#fad56e]" href="#testimonial">{{ __("Testimonial") }}</a>
                            <a class="block w-full p-2 hover:text-[#fad56e]" href="">{{ __("Reservation system") }}</a>
                            <a class="block w-full p-2 hover:text-[#fad56e]" href="">{{ __("CZ") }}</a>
                        </div>
                    </div>
                </div>

                <a href="" class="inline-block cursor-pointer font-[Beautique-Light] text-[#001101] text-2xl">
                    @yourhaircare_cz
                </a>
            </div>
        </header>

        <main class="justify-center">
            {{-- MAIN SECTION --}}
            <section class="w-full bg-[#001101]">
                <div class="py-16 md:py-24 max-w-7xl m-auto relative justify-center">
                    <div class="w-full absolute z-30 text-center p-0" >
                        <h1 class="text-5xl text-center uppercase md:text-8xl mt-24 font-[Beautique-Medium] text-gold gold-animation">
                            {{ __("your hair care") }}
                        </h1>
                        <p class="text-[#FFFDD8] text-2xl mt-48 font-[YsabeauInfant-Regular]">
                            {{ __("the invitation <br>to get to know your best hair" )}}
                        </p>
                    </div>
                    <div class="w-full flex justify-center z-20 overflow-hidden" x-data="{selected: 0}" x-init="setInterval(() => selected = (selected + 1) % 3, 10000)">
                        <img
                            src="img/photos/main_photo2.png"
                            alt=""
                            class="transition-transform ease-in-out duration-1000 transform w-full"
                            :class="{ 'translate-x-0 scale-0 sm:scale-[0.70] z-0': selected === 0, 'translate-x-[100%] z-20': selected === 1, 'translate-x-[200%] scale-0 sm:scale-[0.70] z-20': selected === 2 }"
                        />
                        <img
                            src="img/photos/main_photo1.png"
                            alt=""
                            class="transition-transform ease-in-out duration-1000 transform w-full"
                            :class="{ 'translate-x-0 z-20': selected === 0, 'translate-x-[100%] scale-0 sm:scale-[0.70] z-20': selected === 1, 'translate-x-[-100%] scale-0 sm:scale-[0.70] z-0': selected === 2 }"
                        />
                        <img
                            src="img/photos/main_photo3.png"
                            alt=""
                            class="transition-transform ease-in-out duration-1000 transform w-full"
                            :class="{ 'translate-x-0 scale-0 sm:scale-[0.70] z-0': selected === 0, 'translate-x-[-200%] scale-0 sm:scale-[0.70] z-0': selected === 1, 'translate-x-[-100%] z-0': selected === 2 }"
                        />
                    </div>
                </div>
            </section>

            <div class="w-full h-1" style="background: url('/img/gold3.avif'); background-size: cover"></div>

            {{-- ABOUT US --}}
            <section id="about_us" class="w-full bg-[#001101] h-full">
                <div class="py-16 md:py-24 px-3 sm:px-6 max-w-7xl m-auto md:justify-center grid md:flex md:space-x-16 space-y-12">
                    <div class="w-full md:w-1/2 md:grid md:content-between space-y-12">
                        <x-h2>
                            {{ __("about us") }}
                        </x-h2>
                        <div class="w-full space-y-6 text-[#FFFDD8] text-[20px] font-[YsabeauInfant-Regular]">
                            <p>
                                {{ __("Welcome to a cozy hair care studio! My approach to hair services is not only technical skill, but also attention to your individual needs. Join a beauty community where your satisfaction is my top priority.") }}
                            </p>
                            <p>
                                {{ __("Trust me to care for the health and beauty of your hair, and together we'll make your hair look amazing.") }}
                            </p>
                            <p>
                                {{ __("I look forward to seeing you in the studio to create healthy and beautiful hair!") }}
                            </p>
                        </div>

                        <x-reservation-button/>
                    </div>
                    <div class="w-full md:w-1/2">
                        <img src="img/photos/about_us.png" alt="" class="w-full float-right">
                    </div>
                </div>
            </section>

            {{-- 10% GIFT --}}
            <section class="w-full flex-1 bg-gold gold-animation">
                <div class="py-8 max-w-7xl px-3 sm:px-6 m-auto text-center">
                    <h4 class="text-md sm:text-lg md:text-xl uppercase font-[YsabeauInfant-Regular]">meet the master and get a gift</h3>
                    <h3 class="text-lg sm:text-2xl md:text-3xl font-bold uppercase font-[YsabeauInfant-Bold]">10% on your first procedure</h2>
                </div>
            </section>

            {{-- SERVICES --}}
            <section id="services_prices" class="w-full bg-[#001101] font-[YsabeauInfant-Regular]">
                <div class="py-16 md:py-24 px-3 sm:px-6 max-w-7xl m-auto w-full space-y-16 md:space-y-12">
                    {{-- nanoplastics --}}
                    <div class="w-full flex justify-start">
                        <ul class="text-[#FFFDD8] text-[20px] space-y-6 w-[580px]">
                            <li>
                                <x-h2>
                                    {{ __("nanoplastics") }}
                                </x-h2>
                            </li>
                            <li class="flex space-x-4">
                                <span class="text-3xl leading-12 text-[#C9A43D]">•</span> 
                                <p class="leading-12">
                                    {{ __("application of an acidic composition for perfect straightening, including afro hair") }}
                                </p>
                            </li>
                            <li class="flex items-center space-x-4">
                                <span class="text-3xl leading-12 text-[#C9A43D]">•</span> 
                                <p class="leading-12">
                                    {{ __("providing mdoothness and silkiness for a long-lasting effect") }}
                                </p>
                            </li>
                            <li>
                                <a href="" class="text-[#C9A43D]" x-data="" x-on:click.prevent="$dispatch('open-modal', 'nanoplastics')">
                                    {{ __("see more...") }}
                                </a>
                            </li>
                        </ul>
                    </div>

                    {{-- keratin --}}
                    <div class="w-full flex justify-end">
                        <ul class="text-[#FFFDD8] text-[20px] space-y-6 w-[580px]">
                            <li>
                                <x-h2>
                                    {{ __("keratin") }}
                                </x-h2>
                            </li>
                            <li class="flex space-x-4">
                                <span class="text-3xl leading-12 text-[#C9A43D]">•</span> 
                                <p class="leading-12">
                                    {{ __("reduction of frizz and achievement of a long-lasting effect") }}
                                </p>
                            </li>
                            <li class="flex items-center space-x-4">
                                <span class="text-3xl leading-12 text-[#C9A43D]">•</span> 
                                <p class="leading-12">
                                    {{ __("suitable for those dreaming of straight, smooth hair") }}
                                </p>
                            </li>
                            <li>
                                <a href="" class="text-[#C9A43D]" x-data="" x-on:click.prevent="$dispatch('open-modal', 'keratin')">
                                    {{ __("see more...") }}
                                </a>
                            </li>
                        </ul>
                    </div>

                    {{-- afro_hair_extensions --}}
                    <div class="w-full flex justify-start">
                        <ul class="text-[#FFFDD8] text-[20px] space-y-6 w-[580px] md:w-min">
                            <li>
                                <x-h2>
                                    {{ __("afro hair extensions") }}
                                </x-h2>
                            </li>
                            <li class="flex space-x-4">
                                <span class="text-3xl leading-12 text-[#C9A43D]">•</span> 
                                <p class="leading-12">
                                    {{ __("safe extensions using material identical to natural hair") }}
                                </p>
                            </li>
                            <li class="flex items-center space-x-4">
                                <span class="text-3xl leading-12 text-[#C9A43D]">•</span> 
                                <p class="leading-12">
                                    {{ __("attachment to mini-braids and integration of donor strands without tangles or glue") }}
                                </p>
                            </li>
                            <li>
                                <a href="" class="text-[#C9A43D]" x-data="" x-on:click.prevent="$dispatch('open-modal', 'afro_hair_extensions')">
                                    {{ __("see more...") }}
                                </a>
                            </li>
                        </ul>
                    </div>

                    {{-- botox --}}
                    <div class="w-full flex justify-end">
                        <ul class="text-[#FFFDD8] text-[20px] space-y-6 w-[580px]">
                            <li>
                                <x-h2>
                                    {{ __("botox") }}
                                </x-h2>
                            </li>
                            <li class="flex space-x-4">
                                <span class="text-3xl leading-12 text-[#C9A43D]">•</span> 
                                <p class="leading-12">
                                    {{ __("adding shine and caring for dry, brittle, or damaged hair") }}
                                </p>
                            </li>
                            <li class="flex items-center space-x-4">
                                <span class="text-3xl leading-12 text-[#C9A43D]">•</span> 
                                <p class="leading-12">
                                    {{ __("ideal combination with colouring for comprehensive care") }}
                                </p>
                            </li>
                            <li>
                                <a href="" class="text-[#C9A43D]" x-data="" x-on:click.prevent="$dispatch('open-modal', 'botox')">
                                    {{ __("see more...") }}
                                </a>
                            </li>
                        </ul>
                    </div>

                    {{-- cold_restoration --}}
                    <div class="w-full flex justify-start">
                        <ul class="text-[#FFFDD8] text-[20px] space-y-6 w-[580px]">
                            <li>
                                <x-h2>
                                    {{ __("cold restoration") }}
                                </x-h2>
                            </li>
                            <li class="flex space-x-4">
                                <span class="text-3xl leading-12 text-[#C9A43D]">•</span> 
                                <p class="leading-12">
                                    {{ __("designed for dry, dehydrated, and damaged hair") }}
                                </p>
                            </li>
                            <li class="flex items-center space-x-4">
                                <span class="text-3xl leading-12 text-[#C9A43D]">•</span> 
                                <p class="leading-12">
                                    {{ __("contains deep-penetrating components") }}
                                </p>
                            </li>
                            <li class="flex items-center space-x-4">
                                <span class="text-3xl leading-12 text-[#C9A43D]">•</span> 
                                <p class="leading-12">
                                    {{ __("provides hair with elasticity, strength, and softness") }}
                                </p>
                            </li>
                            <li class="flex items-center space-x-4">
                                <span class="text-3xl leading-12 text-[#C9A43D]">•</span> 
                                <p class="leading-12">
                                    {{ __("no straightening or glossy effect") }}
                                </p>
                            </li>
                            <li>
                                <a href="" class="text-[#C9A43D]" x-data="" x-on:click.prevent="$dispatch('open-modal', 'cold_restoration')">
                                    {{ __("see more...") }}
                                </a>
                            </li>
                        </ul>
                    </div>

                    {{-- hair_polishing --}}
                    <div class="w-full flex justify-end">
                        <ul class="text-[#FFFDD8] text-[20px] space-y-6 w-[580px]">
                            <li>
                                <x-h2>
                                    {{ __("hair polishing") }}
                                </x-h2>
                            </li>
                            <li class="flex space-x-4">
                                <span class="text-3xl leading-12 text-[#C9A43D]">•</span> 
                                <p class="leading-12">
                                    {{ __("gentle removal of dry and damaged hair tips") }}
                                </p>
                            </li>
                            <li class="flex items-center space-x-4">
                                <span class="text-3xl leading-12 text-[#C9A43D]">•</span> 
                                <p class="leading-12">
                                    {{ __("suitable for all hair types") }}
                                </p>
                            </li>
                            <li>
                                <a href="" class="text-[#C9A43D]" x-data="" x-on:click.prevent="$dispatch('open-modal', 'hair_polishing')">
                                    {{ __("see more...") }}
                                </a>
                            </li>
                        </ul>
                    </div>

                    {{-- trimming_spa --}}
                    <div class="w-full flex justify-start">
                        <ul class="text-[#FFFDD8] text-[20px] space-y-6 w-[580px] md:w-min">
                            <li>
                                <x-h2>
                                    {{ __("trimming + spa") }}
                                </x-h2>
                            </li>
                            <li class="flex space-x-4">
                                <span class="text-3xl leading-12 text-[#C9A43D]">•</span> 
                                <p class="leading-12">
                                    {{ __("trimming damaged tips with subsequent spa care") }}
                                </p>
                            </li>
                            <li class="flex items-center space-x-4">
                                <span class="text-3xl leading-12 text-[#C9A43D]">•</span> 
                                <p class="leading-12">
                                    {{ __("optimal service for maintaining the health and beauty of hair") }}
                                </p>
                            </li>
                            <li>
                                <a href="" class="text-[#C9A43D]" x-data="" x-on:click.prevent="$dispatch('open-modal', 'trimming_spa')">
                                    {{ __("see more...") }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <div class="w-full h-1" style="background: url('/img/gold3.avif'); background-size: cover"></div>

            {{-- FREQUENTLY ASKED QUESTIONS --}}
            <section id="frequently_asked_questions" class="w-full bg-[#001101] font-[YsabeauInfant-Regular]">
                <div class="py-16 md:py-24 px-3 sm:px-6 max-w-7xl m-auto w-full space-y-16">
                    <x-h2>
                        {{ __("frequently asked questions") }}
                    </x-h2>
                    <div class="space-y-12">
                        <x-asked-question :question="__('How to avoid split ends?')">
                            <p class="w-full">
                                {{ __("Do not hesitate to trim what cannot be saved in time and practice mdart at-home care for your hair type.") }}
                            </p>
                            <p>
                                {{ __("-Apply moisturizing hair masks.") }}
                            </p>
                            <p>
                                {{ __("-Use heat protectants before using flat irons and hair dryers to prevent split ends.") }}
                            </p>
                        </x-asked-question>

                        <x-asked-question :question="__('How to maintain the color of dyed hair?')">
                            <p class="w-full">
                                {{ __("Use shampoos and conditioners designed for colored hair, avoid exposure to strong ultraviolet rays, hot water, and frequent use of heat styling tools.") }}
                            </p>
                        </x-asked-question>

                        <x-asked-question :question="__('How do I maintain the color of my colored hair?')">
                            <p class="w-full">
                                {{ __("Use shampoos and conditioners for color-treated hair, avoid heavy UV exposure, hot water and frequent use of heat tools.") }}
                            </p>
                        </x-asked-question>
                        
                        <x-asked-question :question="__('How to determine which is better for me: keratin hair straightening or hair botox?')" class="space-y-4">
                            <p class="w-full">
                                {{ __("The choice between keratin hair straightening and hair botox depends on your individual needs and the characteristics of your hair.") }}
                            </p>
                            <p class="w-full">
                                {{ __("If you want to smooth your hair, eliminate frizz, and add shine, hair botox might be a more suitable option. This procedure improves hair texture, making it more manageable and smooth. It helps prevent split ends and breakage while promoting hair length growth.") }}
                            </p>
                            <p class="w-full">
                                {{ __("If your main goal is to straighten curly or wavy hair, then keratin hair straightening is suitable for you. However, it also provides smoothness, softness, and a glossy shine to the hair.") }}
                            </p>
                            <p class="w-full">
                                {{ __("The final decision is made on-site after a visual inspection, hair diagnosis, and a conversation with you.") }}
                            </p>
                        </x-asked-question>

                        <x-asked-question :question="__('How long does hair botox last, and what measures can be taken to maintain its effect on the hair?')" class="space-y-4">
                            <p class="w-full">
                                {{ __("Hair botox typically lasts on the hair for an average of up to 3 months, depending on individual hair characteristics and care. To maintain the effect of hair botox, it is recommended to follow these steps:") }}
                            </p>
                            <ul class="list-inside list-disc space-y-4">
                                <li>
                                    Choose a shampoo suitable for your scalp type. Only wash the roots, avoiding the length of the hair.
                                </li>
                                <li>
                                    After each shampoo, apply conditioner for 1-2 minutes.
                                </li>
                                <li>
                                    Use a hair mask once or twice a week (every 3 hair washes or in between). Apply the mask to damp hair (squeeze out excess water with a towel), leave it on for 7-10 minutes, and then follow with a 1-2 minute application of conditioner. Rinse with water.
                                </li>
                                <li>
                                    Always blow-dry your hair. Avoid going to bed with wet hair.
                                </li>
                                <li>
                                    Use a hairdryer in the direction of the hair cuticles (following hair growth).
                                </li>
                                <li>
                                    Remember to use heat protection before every blow-dry.
                                </li>
                                <li>
                                    Oils and leave-in treatments are also recommended in home care.
                                </li>
                            </ul>
                        </x-asked-question>

                        <x-asked-question :question="__('How long does keratin hair straightening last, and what measures can be taken to maintain its effect?')" class="space-y-4">
                            <p class="w-full">
                                {{ __("The effect typically lasts for 3-5 months, depending on hair type and care conditions. To maintain it and extend the duration of the effect, it is recommended to follow these guidelines:") }}
                            </p>
                            <ul class="list-inside list-disc space-y-4">
                                <li>
                                    Choose a shampoo based on your scalp type. Wash only the roots, avoiding the length of the hair.
                                </li>
                                <li>
                                    After each shampoo, apply conditioner for 1-2 minutes.
                                </li>
                                <li>
                                    Use a hair mask once or twice a week (every 3 hair washes or in between). Apply the mask to damp hair (squeeze out excess water with a towel).
                                </li>
                                <li>
                                    Leave the mask on for 7-10 minutes. After the mask, apply conditioner for 1-2 minutes, then rinse with water.
                                </li>
                                <li>
                                    Always blow-dry your hair. Avoid going to bed with wet hair.
                                </li>
                                <li>
                                    Dry your hair with a hairdryer following the direction of the hair cuticles (along the growth).
                                </li>
                                <li>
                                    Don't forget to use heat protection before every blow-dry.
                                </li>
                                <li>
                                    Oils and leave-in treatments are also recommended in home care.
                                </li>
                            </ul>
                            
                        </x-asked-question>

                        <x-asked-question :question="__('How long can you wear afro braids, and how should you properly care for your hair during this procedure?')" class="space-y-4">
                            <p class="w-full">
                                {{ __("Afro braids can be worn for 2-3 months. To care for your hair during this period, follow these recommendations:") }}
                            </p>
                            <ul class="list-inside list-disc space-y-4">
                                <li>
                                    Comb your hair before washing and before bedtime.
                                </li>
                                <li>
                                    Braid your hair into a loose braid at night.
                                </li>
                                <li>
                                    Moisturize daily.
                                </li>
                                <li>
                                    Wash with care (Avoid rubbing the hair and scalp; apply conditioner or mask only to the length).
                                </li>
                                <li>
                                    Gentle combing: Comb your hair carefully, starting from the ends to avoid pulling and breakage.
                                </li>
                            </ul>
                        </x-asked-question>
                    </div>
                </div>
            </section>

            {{-- CONSULTATION AS A GIFT --}}
            <section class="w-full bg-gold gold-animation">
                <div class="py-8 max-w-7xl px-3 sm:px-6 m-auto text-center">
                    <h3 class="text-lg sm:text-2xl md:text-3xl font-bold uppercase font-[YsabeauInfant-Bold]">{{ __("Receive a consultation as a gift") }}</h2>
                    <h4 class="text-md sm:text-lg md:text-xl uppercase font-[YsabeauInfant-Medium]">{{ __("including a thorough analysis of the hair care products you currently use") }}</h3>
                </div>
            </section>
            
            {{-- TESTIMONIAL - REWIEWS --}}
            <section id="testimonial" class="w-full bg-[#001101] font-[YsabeauInfant-Regular]">
                <div class="py-16 md:py-24 px-3 sm:px-6 max-w-7xl m-auto space-y-16">
                    <div class="w-full md:flex md:space-x-8 overflow-hidden space-y-16 md:space-y-0">
                        <div class="w-full md:w-1/4 space-y-4">
                            <i class="fa-solid fa-quote-right text-4xl text-gold"></i>
                            <p class="ml-6 text-[#FFFDD8]">
                                {{ __("Thank you so much for making my hair so beautiful. hair, I'm very happy with it. I didn't expect such a result. You've got golden hands. My hair was very frizzy and curly, and now I can't even I can't get enough of it. Thank you very much again and I will definitely see you at the next session!") }}
                            </p>
                            <span class="text-[#FFFDD8] float-right">
                                lenka
                            </span>
                        </div>
                        <div class="w-full md:w-1/4 space-y-4">
                            <i class="fa-solid fa-quote-right text-4xl text-gold"></i>
                            <p class="ml-6 text-[#FFFDD8]">
                                {{ __("Thank you so much for making my hair so beautiful. hair, I'm very happy with it. I didn't expect such a result. You've got golden hands. My hair was very frizzy and curly, and now I can't even I can't get enough of it. Thank you very much again and I will definitely see you at the next session!") }}
                            </p>
                            <span class="text-[#FFFDD8] float-right">
                                lenka
                            </span>
                        </div>
                        <div class="w-full md:w-1/4 space-y-4">
                            <i class="fa-solid fa-quote-right text-4xl text-gold"></i>
                            <p class="ml-6 text-[#FFFDD8]">
                                {{ __("Thank you so much for making my hair so beautiful. hair, I'm very happy with it. I didn't expect such a result. You've got golden hands. My hair was very frizzy and curly, and now I can't even I can't get enough of it. Thank you very much again and I will definitely see you at the next session!") }}
                            </p>
                            <span class="text-[#FFFDD8] float-right">
                                lenka
                            </span>
                        </div>
                        <div class="w-full md:w-1/4 space-y-4">
                            <i class="fa-solid fa-quote-right text-4xl text-gold"></i>
                            <p class="ml-6 text-[#FFFDD8]">
                                {{ __("Thank you so much for making my hair so beautiful. hair, I'm very happy with it. I didn't expect such a result. You've got golden hands. My hair was very frizzy and curly, and now I can't even I can't get enough of it. Thank you very much again and I will definitely see you at the next session!") }}
                            </p>
                            <span class="text-[#FFFDD8] float-right">
                                lenka
                            </span>
                        </div>
                    </div>
                    <div class="w-full text-center">
                        <a href="" class="uppercase text-xl hover-gold-animation m-auto text-gold">
                            {{ __("see more review") }}
                        </a>
                    </div>
                </div>
            </section>
        </main>

        <div class="w-full h-1" style="background: url('/img/gold3.avif'); background-size: cover"></div>

        <footer class="w-full bg-[#001101] font-[YsabeauInfant-Regular]">
            <div class="py-16 md:py-24 px-3 sm:px-6 max-w-7xl space-y-8 text-center m-auto">
                <address class="w-full text-[#FFFDD8] not-italic text-xl">
                    Beethovenova 7, Brno, Czech Republic
                </address>

                <x-reservation-button/>>
                
                <div class="flex">
                    <a href="" class="text-2xl font-[Beautique-Light] hover-gold-animation m-auto text-gold">
                        <i class="fa-brands fa-instagram"></i>
                        yourhaircare_cz
                    </a>
                </div>
            </div>
        </footer>
    </body>
</html>
