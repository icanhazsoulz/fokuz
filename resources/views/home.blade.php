<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">FoKuZ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">{{ __('ui.menu.home') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('ui.menu.portfolio') }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">{{ __('ui.menu.dogs') }}</a></li>
                        <li><a class="dropdown-item" href="#">{{ __('ui.menu.cats') }}</a></li><li><a class="dropdown-item" href="#">{{ __('ui.menu.small_animals') }}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">{{ __('ui.menu.about') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">{{ __('ui.menu.prices') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">{{ __('ui.menu.contacts') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">{{ __('ui.menu.shelters') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">{{ __('ui.menu.blog') }}</a>
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

<div class="container">
    <div class="row">
        <div class="col">
            <form method="post" action="{{ route('create-order') }}" autocomplete="off">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label for="first-name">{{ __('ui.contact_form.first_name') }}</label>
                        <input name="first_name" id="first-name" type="text" class="form-control">
                    </div>
                    <div class="col">
                        <label for="last-name">{{ __('ui.contact_form.last_name') }}</label>
                        <input name="last_name" id="last-name" type="text" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="email" class="form-label">{{ __('ui.contact_form.email') }}</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="col">
                        <label for="phone" class="form-label">{{ __('ui.contact_form.phone') }}</label>
                        <input name="phone" type="tel" class="form-control" id="phone" aria-describedby="phoneHelp">
                        <div id="phoneHelp" class="form-text">We'll never share your phone with anyone else.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="theme" class="form-label">{{ __('ui.contact_form.theme') }}</label>
                        <input name="theme" type="text" class="form-control" id="theme">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="description" class="form-label">{{ __('ui.contact_form.description') }}</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="client-source" class="form-label">{{ __('ui.contact_form.client_source') }}</label>
                        <select name="client_source" id="client-source" class="form-control">
                            <option value="google">Google</option>
                            <option value="ads">Ads</option>
                            <option value="recommendation">Friends recommendation</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="shelter" class="form-label">{{ __('ui.contact_form.shelters') }}</label>
                        <select name="shelter" id="shelter" class="form-control">
                            <option value="01">Shelter 1</option>
                            <option value="02">Shelter 2</option>
                            <option value="03">Shelter 3</option>
                        </select>
                    </div>
                </div>
{{--                <div class="mb-3">--}}
{{--                    <label for="exampleInputPassword1" class="form-label">Password</label>--}}
{{--                    <input type="password" class="form-control" id="exampleInputPassword1">--}}
{{--                </div>--}}
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">{{ __('ui.contact_form.submit') }}</button>
            </form>
        </div>
    </div>
</div>


{{--@if (Route::has('login'))--}}
{{--    <livewire:welcome.navigation />--}}
{{--@endif--}}
@livewireScripts
</body>
</html>
