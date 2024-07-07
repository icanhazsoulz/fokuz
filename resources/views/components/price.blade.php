@php
    $classes = 'font-sans font-medium text-2xl text-primary-focused mt-16';
@endphp

<p {{ $attributes->merge(['class' => $classes]) }}>
    <span>{{ $slot }}</span> &#8364;
</p>


