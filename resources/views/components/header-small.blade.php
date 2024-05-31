@php
    $classes = 'color-primary-focused  font-serif font-medium text-4xl';
@endphp

<h2 {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</h2>
