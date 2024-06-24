@php
    $classes = 'w-40 text-inherit absolute flex flex-col items-center z-10';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <div class="flex justify-around text-inherit mb-4 gap-6">
        <x-slider-btn class="text-inherit"></x-slider-btn>
        <x-slider-btn class="rotate-180"></x-slider-btn>
    </div>
    <div class="flex justify-between gap-5 text-inherit">
         <x-slider-bullet class="text-inherit"></x-slider-bullet>
        <x-slider-bullet></x-slider-bullet>
        <x-slider-bullet></x-slider-bullet>
        <x-slider-bullet></x-slider-bullet>
        <x-slider-bullet></x-slider-bullet>
        <x-slider-bullet></x-slider-bullet>
        <x-slider-bullet></x-slider-bullet>
    </div>
</div>
