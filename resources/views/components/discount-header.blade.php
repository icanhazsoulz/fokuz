@php
    $classes = 'flex items-center h-full py-12 text-8xl font-medium text-center bg-red text-white font-serif shrink-10 relative before:content-[""] before:h-full before:w-0 before:absolute before:top-0 before:bottom-0  before:border-r-2 before:border-white before:border-dashed';
@endphp


<h2 {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</h2>
