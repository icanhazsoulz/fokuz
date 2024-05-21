@php
    $classes = 'rounded-full cursor-pointer text-white';
@endphp


<div {{ $attributes->merge(['class' => $classes]) }}>
    <svg class="w-2 h-2">
        <use
            class="transition-all duration-200"
            href="./assets/icons/icons-sprite.svg#circle"
        ></use>
    </svg>
</div>
