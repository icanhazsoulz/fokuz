@php
    $classes = 'font-serif font-medium text-gray-400 hover:white text-4xl';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
