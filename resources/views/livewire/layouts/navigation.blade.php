<nav class="sm:flex sm:justify-between w-full">
    <div class="logo p-6">
        <a class="navbar-brand" href="{{ route('home') }}">FoKuZ</a>
    </div>
    <div class="navigation p-6">
        <ul class="md:flex">
            <li class="px-2">
                <a class="nav-link active" aria-current="page"
                   href="{{ route('home') }}">{{ __('ui.menu.home') }}</a>
            </li>
            <li class="px-2">
                <a class="nav-link active" aria-current="page"
                   href="{{ route('page', 'about') }}">{{ __('ui.menu.about') }}</a>
            </li>
            <li class="px-2 dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    {{ __('ui.menu.portfolio') }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">{{ __('ui.menu.dogs') }}</a></li>
                    <li><a class="dropdown-item" href="#">{{ __('ui.menu.cats') }}</a></li>
                    <li><a class="dropdown-item" href="#">{{ __('ui.menu.small_animals') }}</a></li>
                </ul>
            </li>
            <li class="px-2">
                <a class="nav-link active" aria-current="page"
                   href="{{ route('page', 'photoshooting') }}">{{ __('ui.menu.photoshooting') }}</a>
            </li>
            <li class="px-2">
                <a class="nav-link active" aria-current="page"
                   href="{{ route('page', 'shelters') }}">{{ __('ui.menu.shelters') }}</a>
            </li>
            <li class="px-2">
                <a class="nav-link active" aria-current="page"
                   href="{{ route('page', 'blog') }}">{{ __('ui.menu.blog') }}</a>
            </li>
            <li class="px-2">
                <a class="nav-link active" aria-current="page"
                   href="{{ route('page', 'contact') }}">{{ __('ui.menu.contact') }}</a>
            </li>
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



