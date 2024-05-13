@php
    $classes = 'min-h-dvh pt-32 pb-40 relative';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x-widgets.call />
    <div class="container mx-auto relative h-4/6 ">
        <livewire:socials-widget />

        {{ $slot }}
        @if(request()->is('/'))
            <x-button-primary class="absolute bottom-44 left-12  z-30">
                Frag mich mal
            </x-button-primary>
            <div class="pt-10 flex justify-center items-center bg-hero relative">
                <img src="../assets/images/home-page/start-screen-bg.png" alt="white points" class="absolute left-0 top-0">
                <div class="rounded relative before:content-[''] before:absolute before:block before:w-1/3 before:aspect-square before:-top-10 before:-right-16 before:z-0 before:bg-[#EDDEBA] before:rounded after:content-[''] after:absolute after:block after:w-2/3 after:h-1/2 after:aspect-square after:-bottom-10 after:-left-10 after:bg-white after:z-10 after:rounded max-w-[713px]">
                    <div class="relative z-20">
                        <img src="./assets/images/home-page/hero-screen.jpg" alt="black cat">
                    </div>
                </div>
            </div>

            <h1 class="w-fit mx-auto mt-14 relative -left-10 font-serif text-4xl">
                Mit jeder Photobestellung spenden Sie <br />
                <span
                    class="inline-block bg-white font-bold rounded mt-2 px-2 -ml-2"
                >für Tiere in Not</span
                >
            </h1>
        @endif
    </div>
</section>
