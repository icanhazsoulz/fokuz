@php
    $classes = 'flex flex-col justify-center min-h-28 px-5 py-4 mb-5 rounded-bl rounded-br shadow-2xl text-sm';
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</li>
