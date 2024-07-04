@php
    $classes = 'pt-32 bg-yellow relative';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x-widgets.call class="bottom-20"></x-widgets.call>
    <x-container class=" ">
        <livewire:socials-widget></livewire:socials-widget>
        <div class="mb-16">
            <x-header class="relative">
                <span>Was tun</span>
                <x-page-link  class="absolute bottom-0 right-0"/>
            </x-header>
            {{-- <x-subheader>ich liebe meine Arbeit</x-subheader> --}}
        </div>
    </x-container>
</section>
