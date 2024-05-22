@php
    $classes = 'flex flex-col pt-24';
@endphp


<div {{ $attributes->merge(['class' => $classes]) }}>
    <x-discount-header>50% Rabbat</x-discount-header>
    <div class="flex justify-between gap-[10%] px-[10%] py-6">
        <x-discount-text class="max-w-[550px] grow">beim Fotoshootings am Geburtstag Deines Tieres</x-discount-text>
        <x-button-primary>Frag mich mal</x-button-primary>
    </div>
</div>
