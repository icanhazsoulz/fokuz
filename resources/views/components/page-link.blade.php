@php
    $classes = 'flex justify-center items-center w-20 h-20 absolute bottom-0 -right-20 group cursor-pointer';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <svg class="w-8 text-inherit group-hover:text-slate-400">
        <use
            class="transition-all duration-200"
            href="./assets/icons/icons-sprite.svg#page-link"
        ></use>
    </svg>
</a>
