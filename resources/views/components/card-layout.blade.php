@php
    $classes = "max-w-[537px] bg-white rounded-2xl shadow-2xl px-10 py-10 mx-auto relative z-20";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
