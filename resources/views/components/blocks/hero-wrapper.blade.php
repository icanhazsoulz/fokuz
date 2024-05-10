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
            <div class="pt-10 flex justify-center items-center">
                <div class="rounded relative before:content-[''] before:absolute before:block before:w-1/3 before:aspect-square before:-top-10 before:-right-16 before:z-0 before:bg-[#EDDEBA] before:rounded after:content-[''] after:absolute after:block after:w-2/3 after:h-1/2 after:aspect-square after:-bottom-10 after:-left-10 after:bg-font-color-2 after:z-0 after:rounded max-w-[713px]">
                    <div class="relative z-20">
                        <img src="./assets/images/home-page/hero-screen.jpg" alt="black cat">
                    </div>
                </div>
            </div>

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
