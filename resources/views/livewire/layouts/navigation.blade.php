@php
    $menu = [
        ['route' => route('home'), 'label' => __('ui.menu.home')],
        ['route' => route('page', 'about'), 'label' => __('ui.menu.about')],
        ['route' => route('page', 'photoshooting'), 'label' => __('ui.menu.photoshooting')],
        ['route' => route('page', 'portfolio'), 'label' => __('ui.menu.portfolio')],
        ['route' => route('page', 'shelters'), 'label' => __('ui.menu.shelters')],
        ['route' => route('page', 'blog'), 'label' => __('ui.menu.blog')],
        ['route' => route('page', 'contact'), 'label' => __('ui.menu.contact')],
    ];
@endphp
<nav class="sm:flex sm:justify-between w-full">
    <div class="logo p-6">
        <a class="navbar-brand" href="{{ route('home') }}">FoKuZ</a>
    </div>
    <div class="navigation p-6">
        <ul class="md:flex">
            @foreach($menu as $item)
                <li class="px-2">
                    <x-nav-link
                        href="{{ $item['route'] }}"
                        active="{{ \Illuminate\Support\Facades\Request::url() === $item['route'] }}"
                    >{{ $item['label'] }}
                    </x-nav-link>
                </li>
            @endforeach

        </ul>
    </div>
    <div class="auth p-6 text-end z-10">
        @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Register</a>
            @endif
        @endauth
    </div>
</nav>

{{--        <li class="px-2 dropdown">--}}
{{--            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--               aria-expanded="false">--}}
{{--                {{ __('ui.menu.portfolio') }}--}}
{{--            </a>--}}
{{--            <ul class="dropdown-menu">--}}
{{--                <li><a class="dropdown-item" href="#">{{ __('ui.menu.dogs') }}</a></li>--}}
{{--                <li><a class="dropdown-item" href="#">{{ __('ui.menu.cats') }}</a></li>--}}
{{--                <li><a class="dropdown-item" href="#">{{ __('ui.menu.small_animals') }}</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
