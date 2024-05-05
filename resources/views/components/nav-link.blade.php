@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-font-links  text-lg block border-b border-b-[transparent] py-1 pl-4 pr-2 transition-all duration-200 pointer-events-none border-b border-b-gray-800 border-b-2'
            : 'text-font-links text-lg block border-b border-b-[transparent] py-1 pl-4 pr-2 transition-all duration-200 group-hover:text-gray-600';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} aria-current="page">
    {{ $slot }}
</a>
