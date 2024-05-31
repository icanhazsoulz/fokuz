@php
    $classes = 'color-primary-focused  font-serif font-medium text-4xl mb-16';
@endphp

<h2 {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</h2>
