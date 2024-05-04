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
    <div class="container mx-auto px-4 max-w-7xl flex justify-between items-center">
        <div class="logo p-6">
            <a class="navbar-brand" href="{{ route('home') }}">FoKuZ</a>
        </div>
        <nav class="">
            <ul class="flex justify-between items-center gap-2">
                @foreach($menu as $item)
                    <li
                        class="relative group"
                        x-data="{ open: false }"
                        @mouseover.away="open = false"
                    >
                        <x-nav-link
                            href="{{ $item['route'] }}"
                            active="{{ \Illuminate\Support\Facades\Request::url() === $item['route'] }}"
                            @mouseover="open = true"
                        >{{ $item['label'] }}
                        </x-nav-link>
                        @if(array_key_exists('nested', $item))
                            <ul class="bg-white absolute left-0 top-[100%] z-10 w-full rounded-b-md shadow-md opacity-0 scale-y-0 origin-top-left transition ease-in-out group-hover:opacity-100 group-hover:scale-y-100" x-show="open">
                                @foreach($item['nested'] as $nested)
                                    <li>
                                        <x-dropdown-link
                                            href="{{ $nested['route'] }}"
                                            active="{{ \Illuminate\Support\Facades\Request::url() === $nested['route'] }}"
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
