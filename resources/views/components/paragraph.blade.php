@php
    $classes = 'font-sans font-normal text-base text-primary-focused mb-6';
@endphp

<p {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</p>
