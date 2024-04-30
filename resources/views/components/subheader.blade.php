@php
    $classes = 'font-sans font-light text-xl italic mb-6';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
