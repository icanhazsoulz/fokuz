<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'FoKuZ') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            @if (Route::has('login'))
                <livewire:layouts.navigation />
            @endif
    {{--            <p>Users: {{ \App\Models\User::all() }}</p>--}}
    {{--            <p>Messages: {{ \App\Models\Message::all() }}</p>--}}
    {{--            <p>Orders: {{ \App\Models\Order::all() }}</p>--}}
{{--            <div class="min-h-screen bg-gray-100 dark:bg-gray-900">--}}
                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white dark:bg-gray-800 shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <div>
                    <a href="{{ route('home') }}" wire:navigate>
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                </div>

                <!-- Page Content -->
                <main class="w-full sm:max-w-xl md:max-w-4xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </main>
{{--            </div>--}}
        </div>
        @livewireScripts
    </body>
</html>
