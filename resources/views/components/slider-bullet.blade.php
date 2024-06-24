@php
    $classes = 'rounded-full cursor-pointer text-inherit';
@endphp


<div {{ $attributes->merge(['class' => $classes]) }}>
    <svg class="w-2 h-2 text-inherit">
        <use
            class="transition-all duration-200"
            href="./assets/icons/icons-sprite.svg#circle"
        ></use>
    </svg>
</div>
