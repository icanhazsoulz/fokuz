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
        <header class="fixed top-0 left-0 right-0 z-50">
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
                <div class="flex justify-between bg-red rounded-t-3xl text-white px-20 py-12">
                    <div class="">
                        <h4 class="font-bold">{{ __('ui.menu.contact') }}</h4>
                        <ul>
                            {{-- TODO: add icons to the place, mail, phone links --}}
                            <li>Fotografin Iuliia Kuznetcova</li>
                            <li>
                                <a href="https://maps.app.goo.gl/ioiMN4GpXTrTkVmp7">
                                    Ruppenhahn 40, 58791 Werdohl
                                </a>
                            </li>
                            <li>
                                <a href="mailto:ik@fokuz.photo&body={{ __('ui.contact_form.message_placeholder') }}?subject=Frage"
                                >ik@fokuz.photo</a>
                            </li>
                            <li><a href="tel:4915773999273">+ 49 1577 3999 273</a></li>
                        </ul>
                    </div>
                    <div class="">
                        <ul class="font-bold">
                            <li><a href="{{ route('page', 'about') }}">{{ __('ui.menu.about') }}</a></li>
                            <li><a href="{{ route('page', 'photoshooting') }}">{{ __('ui.menu.photoshooting') }}</a></li>
                            <li><a href="{{ route('page', 'portfolio') }}">{{ __('ui.menu.portfolio') }}</a></li>
                            <li><a href="{{ route('page', 'shelters') }}">{{ __('ui.menu.shelters') }}</a></li>
                            <li><a href="{{ route('page', 'blog') }}">{{ __('ui.menu.blog') }}</a></li>
                        </ul>
                    </div>
                    <div class="">
                        <ul class="font-bold">
                            <li><a href="">Informationen</a></li>
                            <li><a href="">AGB’s</a></li>
                            <li><a href="">Datenschutzerklärung</a></li>
                            <li><a href="">Impressum</a></li>
                            <li><a href="">Cookie-Richtlinie (EU)</a></li>
                        </ul>
                    </div>
                    <div class="">
                        <ul>
                            <li><a href="">Conditions</a></li>
                            <li><a href="">All rights reserved</a></li>
                            <li><a href="">{{ date('Y') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        @livewireScripts
    </body>
</html>
