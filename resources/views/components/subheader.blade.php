@php
    $classes = 'text-primary-focused font-sans font-light text-xl italic mb-6';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
