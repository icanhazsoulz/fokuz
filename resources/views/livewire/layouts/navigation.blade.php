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
<div>
    <div class="container mx-auto px-4 max-w-7xl flex justify-between items-center">
        <div class="logo pt-3">
            <a class="navbar-brand text-white hover:text-[#f4eab4]" href="{{ route('home') }}">
                <svg class="w-44 h-24">
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
                    >
                        <x-nav-link
                            href="{{ $item['route'] }}"
                            active="{{ \Illuminate\Support\Facades\Request::url() === $item['route'] }}"
                        >{{ $item['label'] }}
                        </x-nav-link>

                        @if(array_key_exists('nested', $item))
                            <span class="flex justify-center items-center">
                                <svg
                                class="w-3 h-1.5 text-font-color-1 transition-all duration-300 origin-center group-hover:rotate-180 group-hover:origin-center group-hover:text-text-hover"
                                >
                                <use
                                    class="transition-all duration-200"
                                    href="./assets/icons/icons-sprite.svg#drop-down"
                                ></use>
                                </svg>
                            </span>
                            <ul class="bg-white absolute left-0 top-[100%] z-10 w-full rounded-b-md shadow-md opacity-0 scale-y-0 origin-top-left transition duration-500 ease-in-out group-hover:opacity-100 group-hover:scale-y-100"
                            >
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
        <div class="flex gap-4">
            <button class="w-8 flex justify-center items-center cursor-pointer hover:text-white transition-all duration-150">
                <svg class="w-10 h-10 text-font-color-1 hover:text-btn-bg-hover">
                    <use
                        class="transition-all duration-200"
                        href="./assets/icons/icons-sprite.svg#search"
                    ></use>
                </svg>
            </button>
            <div class="auth w-20 flex justify-center items-center relative group z-10">
                <div class="w-full flex justify-center items-center cursor-pointer">
                    <svg class="w-10 h-10 text-font-color-1 hover:text-white">
                        <use
                            class="transition-all duration-200"
                            href="./assets/icons/icons-sprite.svg#user"
                        ></use>
                    </svg>
                </div>
                <div class="bg-white w-full p-3 text-sm absolute left-0 top-[100%] z-10 w-full rounded-b-md shadow-md opacity-0 scale-y-0 origin-top-left transition duration-500 ease-in-out group-hover:opacity-100 group-hover:scale-y-100"
                >
                    <div class="mb-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Log in</a>
                    </div>
                    <div>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class=" font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Register</a>
                        @endif
                    </div>
                    @endauth
                </div>
            </div>
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
