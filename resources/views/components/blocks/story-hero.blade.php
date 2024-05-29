@php
    $classes = 'pt-32 pb-28 relative mb-0 relative';
@endphp


<section {{ $attributes->merge(['class' => $classes]) }}
>
    <x-widgets.call />
    <div class="container max-w-[1160px] mx-auto relative">
        <livewire:socials-widget />

        <x-button-primary class="absolute bottom-44 left-12  z-30">
            Frag mich mal
        </x-button-primary>

        <div class="mb-16">
            <x-header class="text-white tracking-tighter mb-4">Ich über mich</x-header>
            <x-subheader class="text-white mb-28">ich liebe meine Arbeit</x-subheader>
        </div>

    </div>

</section>
