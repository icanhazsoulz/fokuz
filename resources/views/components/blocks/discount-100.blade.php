@php
    $classes = 'w-screen flex justify-between pt-24';
@endphp


<div {{ $attributes->merge(['class' => $classes]) }}>
    <x-discount-header>100% Rabbat</x-discount-header>
    <div class="w-1/2 flex flex-col justify-between items-start grow py-5 px-[5%]">
        <x-discount-text class="max-w-[400px]">Ein beliebiges Fotoshooting fur Dein aus dem Tierheim adoptiertes Tier</x-discount-text>
        <x-button-primary>Frag mich mal</x-button-primary>
    </div>
</div>
