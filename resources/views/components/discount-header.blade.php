@php
    $classes = 'bg-red text-white font-serif px-[5%] shrink-10';
@endphp


<div {{ $attributes->merge(['class' => $classes]) }}>
    <h2 class="py-12 text-8xl text-center border-r-2 border-white border-dashed">{{ $slot }}</h2>
</div>
