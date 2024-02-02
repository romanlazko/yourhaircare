<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="scroll-behavior: smooth;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Vítejte v našem útulném studiu péče o vlasy! Náš přístup ke kadeřnickým službám je zaměřen na technické dovednosti a pozornost k vašim individuálním potřebám. Snažíme se vytvořit společenství krásy, kde je vaše spokojenost naší nejvyšší prioritou.">
        <meta name="keywords" content="hair care, kadeřnictví, salon péče o vlasy, beauty, hair studio">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Your Hair Care">

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="Your Hair Care, kadeřnictví, salon péče o vlasy">
        <meta property="og:description" content="Vítejte v našem útulném studiu péče o vlasy! Náš přístup ke kadeřnickým službám je zaměřen na technické dovednosti a pozornost k vašim individuálním potřebám. Snažíme se vytvořit společenství krásy, kde je vaše spokojenost naší nejvyšší prioritou.">
        <meta property="og:image" content="https://your-haircare.com/img/logo.jpg">
        <meta property="og:site_name" content="Your Hair Care">
        <meta property="og:locale" content="{{ app()->getLocale() }}">
        <meta property="og:url" content="https://your-haircare.com">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Your Hair Care, kadeřnictví, salon péče o vlasy">
        <meta name="twitter:description" content="Vítejte v našem útulném studiu péče o vlasy! Náš přístup ke kadeřnickým službám je zaměřen na technické dovednosti a pozornost k vašim individuálním potřebám. Snažíme se vytvořit společenství krásy, kde je vaše spokojenost naší nejvyšší prioritou.">
        <meta name="twitter:image" content="https://your-haircare.com/img/photos/logo.png">

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="32x32" href="https://your-haircare.com/img/logo.jpg">
        <link rel="icon" type="image/png" sizes="16x16" href="https://your-haircare.com/img/logo.jpg">

        <!-- Canonical URL -->
        <link rel="canonical" href="https://your-haircare.com">

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
                <div class="w-full ">
                    <img class="w-full object-contain" src="img/photos/nanoplastics-before.png" alt="">
                    <p>
                        {{ __("before") }}
                    </p>
                </div>
                <div class="w-full">
                    <img class="w-full object-contain" src="img/photos/nanoplastics-after.png" alt="">
                    <p>
                        {{ __("after") }}
                    </p>
                </div>
            </x-slot>

            <x-slot name="description">
                {{ __("An acid composition is used to straighten curls, even for Afro hair, achieving long-lasting smoothness and silkiness.") }}
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
                <div class="w-full ">
                    <img class="w-full object-contain" src="img/photos/keratin-before.png" alt="">
                    <p>
                        {{ __("before") }}
                    </p>
                </div>
                <div class="w-full">
                    <img class="w-full object-contain" src="img/photos/keratin-after.png" alt="">
                    <p>
                        {{ __("after") }}
                    </p>
                </div>
            </x-slot>

            <x-slot name="description">
                {{ __("A keratin-based hair straightening procedure that reduces frizz and provides long-lasting straight and smooth hair.") }}
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
                <div class="w-full ">
                    <img class="w-full object-contain" src="img/photos/afrohair-before.png" alt="">
                    <p>
                        {{ __("before") }}
                    </p>
                </div>
                <div class="w-full">
                    <img class="w-full object-contain" src="img/photos/afrohair-after.png" alt="">
                    <p>
                        {{ __("after") }}
                    </p>
                </div>
            </x-slot>

            <x-slot name="description">
                {{ __("This is a safe hair extension technique that uses a special material, identical to natural hair, to attach donor hair strands onto mini braids. It’s an ideal option that eliminates tangles and the need for glue.") }}
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
                <div class="w-full ">
                    <img class="w-full object-contain" src="img/photos/botox-before.png" alt="">
                    <p>
                        {{ __("before") }}
                    </p>
                </div>
                <div class="w-full">
                    <img class="w-full object-contain" src="img/photos/botox-after.png" alt="">
                    <p>
                        {{ __("after") }}
                    </p>
                </div>
            </x-slot>

            <x-slot name="description">
                {{ __("This treatment involves saturating the hair’s upper cuticular layer with active components to restore structure and add shine. It is ideal for those with dry, brittle, or damaged hair and can be combined with coloring services.") }}
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
                <div class="w-full ">
                    <img class="w-full object-contain" src="img/photos/coldrestoration-before.png" alt="">
                    <p>
                        {{ __("before") }}
                    </p>
                </div>
                <div class="w-full">
                    <img class="w-full object-contain" src="img/photos/coldrestoration-after.png" alt="">
                    <p>
                        {{ __("after") }}
                    </p>
                </div>
            </x-slot>

            <x-slot name="description">
                <p>
                    {{ __("This is the treatment for dry, dehydrated, and damaged hair. It contains deep-penetrating ingredients that provide the hair with elasticity, strength, and softness. The treatment revitalizes the hair, making it lively and healthy without altering its natural structure. Unlike other treatments, it does not straighten or make the hair glossy.") }}
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
                <div class="w-full ">
                    <img class="w-full object-contain" src="img/photos/hairpolishing-before.png" alt="">
                    <p>
                        {{ __("before") }}
                    </p>
                </div>
                <div class="w-full">
                    <img class="w-full object-contain" src="img/photos/hairpolishing-after.png" alt="">
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
                    <a href="https://webapp.buukan.com/5" class="cursor-pointer hover:underline" target="_blank">
                        {{ __("Reservation") }}
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
                    <a href="https://www.instagram.com/hair_care_cz" class="inline-block cursor-pointer font-[Cormorant] text-[#001101] text-3xl" target="_blank">
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
                            <a class="block w-full p-2 hover:text-[#fad56e]" href="https://webapp.buukan.com/5" target="_blank">{{ __("Reservation system") }}</a>
                            @if (app()->getLocale() == 'en')
                                <a class="block w-full p-2 hover:text-[#fad56e]" href="{{ route('language', 'cz') }}">
                                    CZ
                                </a>
                            @else
                                <a class="block w-full p-2 hover:text-[#fad56e]" href="{{ route('language', 'en') }}">
                                    EN
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

                <a href="https://www.instagram.com/hair_care_cz" class="inline-block cursor-pointer font-[Cormorant] text-[#001101] text-3xl" target="_blank">
                    @yourhaircare_cz
                </a>
            </div>
        </header>

        <main class="justify-center">
            {{-- MAIN SECTION --}}
            <section class="w-full bg-[#001101]">
                <div class="py-16 md:py-24 max-w-7xl m-auto relative justify-center">
                    <div class="w-full absolute z-30 text-center px-4" >
                        <h1 class="text-[40px] text-center uppercase md:text-8xl mt-28 font-[Cormorant] font-medium text-gold gold-animation tracking-widest">
                            {{ __("your hair care") }}
                        </h1>
                        <p class="text-[#FFFDD8] text-xl sm:text-2xl mt-28 font-[YsabeauInfant-Regular]">
                            {{ __("the invitation" )}}<br> {{ __("to get to know your best hair" )}}
                        </p>
                    </div>
                    <div class="w-full flex justify-center z-20 overflow-hidden" x-data="{selected: 0}" x-init="setInterval(() => selected = (selected + 1) % 3, 5000)">
                        <img
                            src="img/photos/main_photo2.png"
                            alt=""
                            class="transition-transform ease-in-out duration-1000 transform w-full"
                            :class="{ 'translate-x-[10%] scale-[0.70] z-0': selected === 0, 'translate-x-[100%] z-20': selected === 1, 'translate-x-[190%] scale-[0.70] z-20': selected === 2 }"
                        />
                        <img
                            src="img/photos/main_photo1.png"
                            alt=""
                            class="transition-transform ease-in-out duration-1000 transform w-full"
                            :class="{ 'translate-x-0 z-20': selected === 0, 'translate-x-[90%] scale-[0.70] z-20': selected === 1, 'translate-x-[-90%] scale-[0.70] z-0': selected === 2 }"
                        />
                        <img
                            src="img/photos/main_photo3.png"
                            alt=""
                            class="transition-transform ease-in-out duration-1000 transform w-full"
                            :class="{ 'translate-x-[-10%] scale-[0.70] z-0': selected === 0, 'translate-x-[-190%] scale-[0.70] z-0': selected === 1, 'translate-x-[-100%] z-0': selected === 2 }"
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
                                {{ __("Welcome to our cozy hair care studio! Our approach to hair services is focused on technical skill and attention to your individual needs. We are committed to creating a beauty community where your satisfaction is our top priority.") }}
                            </p>
                            <p>
                                {{ __("You can trust us to care for the health and beauty of your hair with the utmost care and professionalism. We believe that together, we can create amazing and beautiful hair that you'll love.") }}
                            </p>
                            <p>
                                {{ __("We look forward to welcoming you to our studio and helping you achieve healthy and beautiful hair!") }}
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
                    <h4 class=" text-sm sm:text-lg md:text-xl uppercase font-[YsabeauInfant-Regular]">{{ __("meet the master and get a gift") }}</h3>
                    <h3 class="text-lg sm:text-2xl md:text-3xl font-bold uppercase font-[YsabeauInfant-Bold]">{{ __("10% on your first procedure") }}</h2>
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
                                <span class="text-3xl text-[#C9A43D]">■</span> 
                                <p class="leading-9">
                                    {{ __("application of an acidic composition for perfect straightening, including afro hair") }}
                                </p>
                            </li>
                            <li class="flex space-x-4">
                                <span class="text-3xl text-[#C9A43D]">■</span> 
                                <p class="leading-9">
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
                                <span class="text-3xl text-[#C9A43D]">■</span> 
                                <p class="leading-9">
                                    {{ __("reduction of frizz and achievement of a long-lasting effect") }}
                                </p>
                            </li>
                            <li class="flex space-x-4">
                                <span class="text-3xl text-[#C9A43D]">■</span> 
                                <p class="leading-9">
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
                                <span class="text-3xl text-[#C9A43D]">■</span> 
                                <p class="leading-9">
                                    {{ __("safe extensions using material identical to natural hair") }}
                                </p>
                            </li>
                            <li class="flex space-x-4">
                                <span class="text-3xl text-[#C9A43D]">■</span> 
                                <p class="leading-9">
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
                                <span class="text-3xl text-[#C9A43D]">■</span> 
                                <p class="leading-9">
                                    {{ __("adding shine and caring for dry, brittle, or damaged hair") }}
                                </p>
                            </li>
                            <li class="flex space-x-4">
                                <span class="text-3xl text-[#C9A43D]">■</span> 
                                <p class="leading-9">
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
                                <span class="text-3xl text-[#C9A43D]">■</span> 
                                <p class="leading-9">
                                    {{ __("designed for dry, dehydrated, and damaged hair") }}
                                </p>
                            </li>
                            <li class="flex space-x-4">
                                <span class="text-3xl text-[#C9A43D]">■</span> 
                                <p class="leading-9">
                                    {{ __("contains deep-penetrating components") }}
                                </p>
                            </li>
                            <li class="flex space-x-4">
                                <span class="text-3xl text-[#C9A43D]">■</span> 
                                <p class="leading-9">
                                    {{ __("provides hair with elasticity, strength, and softness") }}
                                </p>
                            </li>
                            <li class="flex space-x-4">
                                <span class="text-3xl text-[#C9A43D]">■</span> 
                                <p class="leading-9">
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
                                <span class="text-3xl text-[#C9A43D]">■</span> 
                                <p class="leading-9">
                                    {{ __("gentle removal of dry and damaged hair tips") }}
                                </p>
                            </li>
                            <li class="flex space-x-4">
                                <span class="text-3xl text-[#C9A43D]">■</span> 
                                <p class="leading-9">
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
                                <span class="text-3xl text-[#C9A43D]">■</span> 
                                <p class="leading-9">
                                    {{ __("trimming damaged tips with subsequent spa care") }}
                                </p>
                            </li>
                            <li class="flex space-x-4">
                                <span class="text-3xl text-[#C9A43D]">■</span> 
                                <p class="leading-9">
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
                        <x-asked-question :question="__('What can I do to prevent split ends?')">
                            <p class="w-full">
                                {{ __("To prevent split ends, it's important to trim your hair regularly and practice good hair care at home. Here are some tips:") }}
                            </p>
                            <p>
                                {{ __("-Use moisturizing hair masks to keep your hair healthy and nourished.") }}
                            </p>
                            <p>
                                {{ __("-Always use a heat protectant before using hot styling tools like flat irons and hair dryers to prevent damaging your hair and causing split ends.") }}
                            </p>
                        </x-asked-question>

                        <x-asked-question :question="__('How to maintain the color of dyed hair?')">
                            <p class="w-full">
                                {{ __("For maintaining the color of dyed hair, use shampoos and conditioners specifically designed for color-treated hair. Avoid exposure to strong ultraviolet rays, hot water, and frequent use of heat-styling tools.") }}
                            </p>
                        </x-asked-question>

                        <x-asked-question :question="__('How do I maintain the color of my colored hair?')">
                            <p class="w-full">
                                {{ __("To keep your hair color from fading, use shampoos and conditioners specifically designed for colored hair. Also, protect your hair from excessive UV exposure, hot water, and heat styling tools.") }}
                            </p>
                        </x-asked-question>
                        
                        <x-asked-question :question="__('How to determine which is better for me: keratin hair straightening or hair botox?')" class="space-y-4">
                            <p class="w-full">
                                {{ __("The choice between keratin hair straightening and hair botox depends on your unique requirements and hair characteristics.") }}
                            </p>
                            <p class="w-full">
                                {{ __("Hair botox is an ideal choice if you want to smoothen your hair, eliminate frizz, and add shine. This procedure enhances hair texture, making it more manageable and smooth. It also helps prevent split ends and breakage while promoting hair length growth. On the other hand, if your primary goal is to straighten your curly or wavy hair, then keratin hair straightening is the right option.") }}
                            </p>
                            <p class="w-full">
                                {{ __("Apart from straightening, it also provides softness, smoothness, and a glossy shine to your hair.") }}
                            </p>
                            <p class="w-full">
                                {{ __("However, the final decision will be made on-site after a visual inspection, hair diagnosis, and a discussion with you.") }}
                            </p>
                        </x-asked-question>

                        <x-asked-question :question="__('How long does hair botox last, and what measures can be taken to maintain its effect on the hair?')" class="space-y-4">
                            <p class="w-full">
                                {{ __("Hair botox usually lasts on the hair for an average of up to 3 months. However, the duration may vary based on individual hair characteristics and care. To keep the effects of hair botox intact, it is recommended to follow these steps:") }}
                            </p>
                            <ul class="list-inside list-disc space-y-4">
                                <li>
                                    {{ __("Choose a suitable shampoo that matches your scalp type. Apply it only to the roots and avoid washing the length of your hair.") }}
                                </li>
                                <li>
                                    {{ __("After every shampoo, apply a conditioner for 1-2 minutes.") }}
                                </li>
                                <li>
                                    {{ __("Use a hair mask once or twice a week, depending on your hair washes or in-between. Apply the mask on damp hair, leave it on for 7-10 minutes, and then follow up with a 1-2 minute application of conditioner. Rinse with water.") }}
                                </li>
                                <li>
                                    {{ __("Always blow-dry your hair and avoid going to bed with wet hair.") }}
                                </li>
                                <li>
                                    {{ __("Use a hairdryer in the direction of the hair cuticles, following the pattern of hair growth.") }}
                                </li>
                                <li>
                                    {{ __("Remember to use heat protection before every blow-dry.") }}
                                </li>
                                <li>
                                    {{ __("In-home care, oils, and leave-in treatments are also recommended.") }}
                                </li>
                            </ul>
                        </x-asked-question>

                        <x-asked-question :question="__('How long does keratin hair straightening last, and what measures can be taken to maintain its effect?')" class="space-y-4">
                            <p class="w-full">
                                {{ __("The effect of the treatment usually lasts for 3-5 months, depending on the type of hair and how it is taken care of. To maintain the effect and extend its duration, it is recommended that you follow these guidelines:") }}
                            </p>
                            <ul class="list-inside list-disc space-y-4">
                                <li>
                                    {{ __("Choose a shampoo based on your scalp type. Only wash the roots and avoid the length of the hair.") }}
                                </li>
                                <li>
                                    {{ __("After each shampoo, apply conditioner for 1-2 minutes.") }}
                                </li>
                                <li>
                                    {{ __("Use a hair mask once or twice a week (every 3 hair washes or in between). Apply the mask to damp hair and squeeze out excess water with a towel.") }}
                                </li>
                                <li>
                                    {{ __("Leave the mask on for 7-10 minutes. After the mask, apply conditioner for 1-2 minutes and then rinse with water.") }}
                                </li>
                                <li>
                                    {{ __("Always blow-dry your hair. Avoid going to bed with wet hair.") }}
                                </li>
                                <li>
                                    {{ __("Dry your hair with a hairdryer following the direction of the hair cuticles (along the growth).") }}
                                </li>
                                <li>
                                    {{ __("Don't forget to use heat protection before every blow-dry.") }}
                                </li>
                                <li>
                                    {{ __("Oils and leave-in treatments are also recommended for home care.") }}
                                </li>
                            </ul>
                        </x-asked-question>

                        <x-asked-question :question="__('How long can you wear afro braids, and how should you properly care for your hair during this procedure?')" class="space-y-4">
                            <p class="w-full">
                                {{ __("Afro braids are a great hairstyle that can be worn for 2-3 months. However, it is important to take care of your hair during this period to keep it healthy. Here are some tips to follow:") }}
                            </p>
                            <ul class="list-inside list-disc space-y-4">
                                <li>
                                    {{ __("Before washing your hair or going to bed, make sure to comb it gently to prevent tangles.") }}
                                </li>
                                <li>
                                    {{ __("At night, braid your hair loosely to avoid pulling on your scalp while you sleep.") }}
                                </li>
                                <li>
                                    {{ __("Moisturize your hair daily to keep it from becoming dry and brittle.") }}
                                </li>
                                <li>
                                    {{ __("When washing your hair, be gentle and avoid rubbing your scalp too hard. Apply conditioner or hair mask only to the length of the hair.") }}
                                </li>
                                <li>
                                    {{ __("To avoid breakage, comb your hair carefully, starting from the ends and working your way up to the roots.") }}
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
                                {{ __("Thank you so much for the amazing work with my hair! I am extremely satisfied. I didn't expect such fantastic results! You have golden hands! My hair was very fluffy and curly, and now I can't stop admiring myself. Thanks again, and we will definitely meet for the next procedure.") }}
                            </p>
                            <span class="text-[#FFFDD8] float-right">
                                Anna
                            </span>
                        </div>
                        <div class="w-full md:w-1/4 space-y-4">
                            <i class="fa-solid fa-quote-right text-4xl text-gold"></i>
                            <p class="ml-6 text-[#FFFDD8]">
                                {{ __("I washed and dried my hair without using a flat iron as I used to. The result: straight, smooth, and frizz-free hair. Previously, I needed a flat iron after each drying session, but now I can forget about it. In the morning, a simple combing is enough, and my hair looks much longer. I'm 100% satisfied and couldn't have imagined my hair looking this wonderful. Your work is superb! Thank you!") }}
                            </p>
                            <span class="text-[#FFFDD8] float-right">
                                Helena
                            </span>
                        </div>
                        <div class="w-full md:w-1/4 space-y-4">
                            <i class="fa-solid fa-quote-right text-4xl text-gold"></i>
                            <p class="ml-6 text-[#FFFDD8]">
                                {{ __("And thank you for the result- I can see how beautiful and lively my hair is after your procedures.") }}
                            </p>
                            <span class="text-[#FFFDD8] float-right">
                                Marina
                            </span>
                        </div>
                        <div class="w-full md:w-1/4 space-y-4">
                            <i class="fa-solid fa-quote-right text-4xl text-gold"></i>
                            <p class="ml-6 text-[#FFFDD8]">
                                {{ __("Hello! It's been two weeks already, and I just can't get enough of my hair, to be honest. They are straight, shiny, and without any frizz. Changing my hair care routine made a significant difference. It turned out to be inexpensive, but it quickly became clear that everything was chosen correctly. Thank you.") }}
                            </p>
                            <span class="text-[#FFFDD8] float-right">
                                Alina
                            </span>
                        </div>
                    </div>
                    <div class="w-full text-center">
                        <a href="https://www.instagram.com/hair_care_cz" class="uppercase text-xl hover-gold-animation m-auto text-gold" target="_blank">
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
                    <a href="https://www.instagram.com/hair_care_cz" class="text-3xl font-[Cormorant] hover-gold-animation m-auto text-gold" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                        yourhaircare_cz
                    </a>
                </div>
            </div>
        </footer>
    </body>
</html>
