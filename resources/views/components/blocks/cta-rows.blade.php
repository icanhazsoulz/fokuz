@php
    $classes = 'w-screen flex flex-col items-stretch px-[] pt-24';
@endphp


<div {{ $attributes->merge(['class' => $classes]) }}>
    <x-discount-header class="justify-center gap-4 before:right-[20%]">
        <span>50%</span>
        <span>Rabatt</span>
    </x-discount-header>
    <div class="flex justify-between gap-[10%] px-[10%] py-6">
        <x-header-medium class="max-w-[550px] grow">beim Fotoshootings am Geburtstag Deines Tieres</x-header-medium>
        <x-button-primary>Frag mich mal</x-button-primary>
    </div>
</div>
