@php
    $menu = [
        ['route' => route('home'), 'label' => __('ui.menu.home')],
        [
            'route' => route('page', 'about'),
            'label' => __('ui.menu.about'),
            'nested' => [
                ['route' => route('page', 'story'), 'label' => __('ui.menu.story')],
                ['route' => route('page', 'testimonials'), 'label' => __('ui.menu.testimonials')],
                ['route' => route('page', 'partners'), 'label' => __('ui.menu.partners')]
            ],
        ],
        [
            'route' => route('page', 'photoshooting'),
             'label' => __('ui.menu.photoshooting'),
             'nested' => [
                ['route' => route('page', 'prices'), 'label' => __('ui.menu.prices')],
                ['route' => route('page', 'faq'), 'label' => __('ui.menu.faq')],
                ['route' => route('page', 'events'), 'label' => __('ui.menu.events')]
            ],
        ],
        ['route' => route('page', 'portfolio'), 'label' => __('ui.menu.portfolio')],
        ['route' => route('page', 'shelters'), 'label' => __('ui.menu.shelters')],
        ['route' => route('page', 'blog'), 'label' => __('ui.menu.blog')],
        ['route' => route('page', 'contact'), 'label' => __('ui.menu.contact')],
    ];
//    dd($menu[1]['nested']);
@endphp
<div class="fixed top-0 left-0 right-0 z-20">
    <div class="container mx-auto px-4 max-w-7xl flex justify-between items-center relative z-40">
        <div class="logo p-6">
            <a class="navbar-brand" href="{{ route('home') }}">
                <svg class="w-44 h-24 text-white hover:text-btn-bg-hover">
                <use
                    class="transition-all duration-200"
                    href="./assets/icons/icons-sprite.svg#logo"
                ></use>
                </svg>
            </a>
        </div>
        <nav class="">
            <ul class="flex justify-between items-center gap-2">
                @foreach($menu as $item)
                    <li
                        class="relative group flex justify-between items-center "
                        x-data="{ open: false }"
                        @mouseover.away="open = false"
                    >
                        <x-nav-link
                            href="{{ $item['route'] }}"
                            active="{{ \Illuminate\Support\Facades\Request::url() === $item['route'] }}"
                            @mouseover="open = true"
                        >{{ $item['label'] }}
                        </x-nav-link>
                        <button class="outline-none [&>svg]:h-4 [&>svg]:w-4" id="dropdownMenuButton2" data-twe-dropdown-toggle-ref
                        aria-expanded="false"
                        data-twe-ripple-init
                        data-twe-ripple-color="light">
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                                </svg>
                            </button>
                        @if(array_key_exists('nested', $item))
                            <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark" x-show="open"
                            aria-labelledby="dropdownMenuButton2"
                            data-twe-dropdown-menu-ref>
                                @foreach($item['nested'] as $nested)
                                    <li>
                                        <x-dropdown-link
                                            href="{{ $nested['route'] }}"
                                            active="{{ \Illuminate\Support\Facades\Request::url() === $nested['route'] }}"
                                            data-twe-dropdown-item-ref
                                        >{{ $nested['label'] }}
                                        </x-dropdown-link>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
        <div class="auth  text-end z-10">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Register</a>
                @endif
            @endauth
        </div>
    </div>
</div>



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
