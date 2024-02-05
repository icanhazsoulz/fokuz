<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
{{--        <meta name="csrf-token" content="{{ csrf_token() }}">--}}

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
{{--            <p>Users: {{ \App\Models\User::all() }}</p>--}}
{{--            <p>Messages: {{ \App\Models\Message::all() }}</p>--}}
{{--            <p>Orders: {{ \App\Models\Order::all() }}</p>--}}
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">FoKuZ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                               href="{{ route('home') }}">{{ __('ui.menu.home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                               href="{{ route('page', 'about') }}">{{ __('ui.menu.about') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                {{ __('ui.menu.portfolio') }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">{{ __('ui.menu.dogs') }}</a></li>
                                <li><a class="dropdown-item" href="#">{{ __('ui.menu.cats') }}</a></li>
                                <li><a class="dropdown-item" href="#">{{ __('ui.menu.small_animals') }}</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                               href="{{ route('page', 'photoshooting') }}">{{ __('ui.menu.photoshooting') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                               href="{{ route('page', 'shelters') }}">{{ __('ui.menu.shelters') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                               href="{{ route('page', 'blog') }}">{{ __('ui.menu.blog') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                               href="{{ route('page', 'contact') }}">{{ __('ui.menu.contact') }}</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        @if ($errors->any())
            @if ($errors->has('first_name'))
                <p>{{$errors->first('first_name')}}</p>
            @endif
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
{{--            <livewire:layout.navigation />--}}

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            {{--@if (Route::has('login'))--}}
            {{--    <livewire:welcome.navigation />--}}
            {{--@endif--}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @livewireScripts
    </body>
</html>
