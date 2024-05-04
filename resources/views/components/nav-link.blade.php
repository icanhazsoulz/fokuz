@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-font-links text-lg block border-b border-b-[transparent] py-1 px-4 transition-all duration-200 group-hover:text-btn-bg-hover border-b border-b-font-links  hover:text-font-links'
            : 'text-font-links text-lg block border-b border-b-[transparent] py-1 px-4 transition-all duration-200 group-hover:text-btn-bg-hover';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} aria-current="page">
    {{ $slot }}
</a>
