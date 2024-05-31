@php
    $classes = 'flex gap-2 absolute z-50 right-5 no-underline text-font-color-1 group';
@endphp

<a
    href="https://wa.me/4915773999273"
    {{ $attributes->merge(['class' => $classes]) }}
>
    <div
        class="text-xs bg-white p-3 rounded shadow-2xl transition-all duration-200 group-hover:scale-105"
    >
        <p>Hast Du Fragen?</p>
        <p class="font-bold">Schreib mir bei WhatsApp!</p>
    </div>
    <div
        class="w-14 h-14 transition-all duration-300 text-[#03c03c] group-hover:text-[#08c942]"
    >
        <svg class="w-full h-full">
            <use href="./assets/icons/icons-sprite.svg#call-me"></use>
        </svg>
    </div>

</a>
