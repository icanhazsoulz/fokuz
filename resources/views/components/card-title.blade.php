@php
    $classes = 'mb-6 font-sans font-semibold text-primary-focused text-2xl tracking-widest';
@endphp

<h4 {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</h4>
