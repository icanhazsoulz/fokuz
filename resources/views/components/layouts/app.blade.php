<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'FoKuZ') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <header class="relative">
            @if (Route::has('login'))
                <livewire:layouts.navigation />
            @endif
        </header>
        <main>
            {{ $slot }}
        </main>
{{--        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">--}}

    {{--            <p>Users: {{ \App\Models\User::all() }}</p>--}}
    {{--            <p>Messages: {{ \App\Models\Message::all() }}</p>--}}
    {{--            <p>Orders: {{ \App\Models\Order::all() }}</p>--}}
{{--            <div class="min-h-screen bg-gray-100 dark:bg-gray-900">--}}
                <!-- Page Heading -->
{{--                @if (isset($header))--}}
{{--                    <header class="bg-white dark:bg-gray-800 shadow">--}}
{{--                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                            {{ $header }}--}}
{{--                        </div>--}}
{{--                    </header>--}}
{{--                @endif--}}

{{--                <div>--}}
{{--                    <a href="{{ route('home') }}" wire:navigate>--}}
{{--                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--                    </a>--}}
{{--                </div>--}}

                <!-- Page Content -->
{{--                <main class="w-full sm:max-w-xl md:max-w-4xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">--}}
{{--                    {{ $slot }}--}}
{{--                </main>--}}
{{--            </div>--}}
{{--        </div>--}}
        <footer>
            <div class="container mx-auto px-12 pt-12">
                <div class="columns-4 bg-red rounded-t-3xl text-white">
                    <div class="text-center p-3">Contacts</div>
                    <div class="text-center p-3">Menu</div>
                    <div class="text-center p-3">Information</div>
                    <div class="text-center p-3">Conditions</div>
                </div>
            </div>
        </footer>
        @livewireScripts

        <footer class="">
            <div class="container max-w-[1160px]">
                <div
                class="footer__wrapper mx-auto py-11 px-20 flex justify-between bg-brand-3 text-font-color-2 rounded-tl-[30px] rounded-tr-[30px]"
                >
                <div class="footer__contacts">
                    <h4 class="footer__title text-lg font-bold">Kontact</h4>
                    <ul class="footer__contacts-list">
                    <li><a href="">Fotografin Iuliia Kuznetcova</a></li>
                    <li><a href="">Ruppenhahn 40, 58791 Werdohl</a></li>
                    <li>
                        <a href="mailto:ik@fokuz.photo&body=привет?subject=вопрос"
                        >ik@fokuz.photo</a
                        >
                    </li>
                    <li><a href="tel:4915773999273">+ 49 1577 3999 273</a></li>
                    </ul>
                </div>
                <ul class="footer__links">
                    <li><a href="about.html">Da bin ich</a></li>
                    <li><a href="portfolio.html">Can sein</a></li>
                    <li><a href="success.html">Erflog</a></li>
                    <li><a href="">Tierheimhilife</a></li>
                    <li><a href="">Memoiren</a></li>
                </ul>
                <ul class="footer__links">
                    <li><a href="">Informationen</a></li>
                    <li><a href="">AGB’s</a></li>
                    <li><a href="">Datenschutzerklärung</a></li>
                    <li><a href="">Impressum</a></li>
                    <li><a href="">Cookie-Richtlinie (EU)</a></li>
                </ul>
                <ul class="footer__links">
                    <li><a href="">Conditions</a></li>
                    <li><a href="">All rights reserved</a></li>
                    <li><a href="">2024</a></li>
                </ul>
                </div>
            </div>
        </footer>
    </body>
</html>
