{{--@props(['active'])--}}

@php
    $active = true;
    $commonClasses = '
        font-serif font-medium text-2xl text-left
        border
        rounded-t-2xl
        px-8 py-2
        focus:outline-none
        transition duration-150 ease-in-out w-96
    ';
    $classes = ($active ?? false)
                ?
                $commonClasses . 'text-white border-primary bg-primary hover:bg-primary-hover focus:bg-primary-hover active:bg-primary-pressed shadow-md'
                :
                $commonClasses . 'text-primary-focused border-neutral';
@endphp

<button {{ $attributes->merge(['class' => $classes]) }} aria-current="page">
    {{ $slot }}
</button>
