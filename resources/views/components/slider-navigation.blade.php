@php
    $classes = 'w-40 absolute flex flex-col items-center translate-x-full translate-y-full z-10';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <div class="flex justify-around mb-4 gap-6">
        <x-slider-btn></x-slider-btn>
        <x-slider-btn class="rotate-180"></x-slider-btn>
    </div>
    <div class="flex justify-between gap-5">
         <x-slider-bullet></x-slider-bullet>
        <x-slider-bullet></x-slider-bullet>
        <x-slider-bullet></x-slider-bullet>
        <x-slider-bullet></x-slider-bullet>
        <x-slider-bullet></x-slider-bullet>
        <x-slider-bullet></x-slider-bullet>
        <x-slider-bullet></x-slider-bullet>
    </div>
</div>
