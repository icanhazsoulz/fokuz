@php
    $classes = 'text-4xl font-sans';
@endphp


<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
