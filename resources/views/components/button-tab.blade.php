{{--@props(['alpineActive' => null])--}}

@php
    $classes = '
        font-serif font-medium text-2xl text-left
        border
        rounded-t-2xl
        px-8 py-2
        focus:outline-none
        transition duration-150 ease-in-out w-96
    ';
@endphp

<button {{ $attributes->merge(['class' => $classes]) }} aria-current="page">
    {{ $slot }}
</button>
