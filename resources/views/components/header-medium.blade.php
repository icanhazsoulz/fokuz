@php
    $classes = 'text-primary-focused font-serif font-normal text-4xl mb-8';
@endphp

<h2 {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</h2>
