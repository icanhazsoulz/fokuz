@php
    $classes = 'text-primary-focused font-serif font-medium text-2xl mb-4';
@endphp

<h3 {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</h3>
