@php
    $classes = 'container mx-auto max-w-[1160px] relative';
@endphp


<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
