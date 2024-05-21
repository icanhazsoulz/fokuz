@php
    $classes = 'w-16 h-16 rounded-full border-2  flex justify-center items-center hover:border-slate-200 transition-all duration-200 group';
@endphp


<button {{ $attributes->merge(['class' => $classes]) }}>
    <svg class="w-4 h-4 group-hover:text-inherit group-hover:text-slate-200">
        <use
            class="transition-all duration-200"
            href="./assets/icons/icons-sprite.svg#slider-arrow"
        ></use>
    </svg>
</button>
