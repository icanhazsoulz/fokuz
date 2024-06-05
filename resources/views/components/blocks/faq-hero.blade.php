@php
    $classes = 'min-h-dvh pt-32 pb-72 bg-yellow relative';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x-widgets.call class="bottom-20"></x-widgets.call>
    <x-container class=" ">
        <livewire:socials-widget></livewire:socials-widget>
        <div class="mb-16">
            <x-header>Was tun</x-header>
            <x-subheader>ich liebe meine Arbeit</x-subheader>
        </div>
    </x-container>
</section>
