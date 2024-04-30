@php
    $classes = 'font-sans font-normal text-base mb-6';
@endphp

<p {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</p>
