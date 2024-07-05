@php
    $classes = 'w-screen flex justify-between pt-24';
@endphp


<div {{ $attributes->merge(['class' => $classes]) }}>
    <x-discount-header class="w-[45%] flex-col before:right-[11%]">
        <span>100%</span>
        <span>Rabatt</span>
    </x-discount-header>
    <div class="w-1/2 flex flex-col justify-between items-start grow py-5 px-[5%]">
        <x-header-medium>Ein beliebiges Fotoshooting für Dein aus dem Tierheim adoptiertes Tier</x-header-medium>
        <x-button-primary>Frag mich mal</x-button-primary>
    </div>
</div>
