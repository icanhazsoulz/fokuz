@php
    $classes = 'h-dvh pt-32 pb-80';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div class="container mx-auto relative h-4/6 flex justify-center items-center">
        <livewire:socials-widget />
        <x-widgets.call />
        {{ $slot }}
        @if(request()->is('/'))
            <x-button-primary class="absolute bottom-24 left-12">
                Frag mich mal
            </x-button-primary>
        @endif
    </div>
    @if(request()->is('/'))
        <div class="container mx-auto">
            <h1 class="text-4xl">
                Mit jeder Photobestellung spenden Sie <br />
                <span
                    class="inline-block bg-white font-bold rounded mt-2 px-2 -ml-2"
                >für Tiere in Not</span
                >
            </h1>
        </div>
    @endif
</section>
