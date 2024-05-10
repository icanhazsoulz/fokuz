@php
    $classes = ' font-serif font-medium text-8xl mb-8';
@endphp

<h2 {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</h2>
