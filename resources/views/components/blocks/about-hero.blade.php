@php
    $classes = 'text-font-color-2 pt-32 pb-48 relative';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x-widgets.call />
    <div class="container mx-auto bg-no-repeat bg-[left_1.5rem_top] relative">
        <livewire:socials-widget />

{{--{{ $slot }}--}}
        {{--@if(request()->is('/'))--}}
            <x-button-primary class="absolute bottom-44 left-12  z-30">
                Frag mich mal
            </x-button-primary>
            <div class="mb-16">
                <x-header class="text-white tracking-tighter">Da bin ich</x-header>
                <x-subheader class="text-white">Ich verwandle Ihre Tiere in echte Superstars!</x-subheader>
            </div>
            <div class="pt-10 flex justify-center items-center relative">
                {{--<img src="../assets/images/home-page/start-screen-bg.png" alt="white points" class="absolute left-0 top-0">--}}
                <div class="rounded relative before:content-[''] before:absolute before:block before:w-1/3 before:aspect-square before:-top-10 before:-right-16 before:z-0 before:bg-[#EDDEBA] before:rounded after:content-[''] after:absolute after:block after:w-2/3 after:h-1/2 after:aspect-square after:-bottom-10 after:-left-10 after:bg-white after:z-10 after:rounded max-w-[713px]">
                    <div class="relative z-20">
                        <img src="./assets/images/about-page/about-hero.jpg" alt="Yulia Kuznetcova">
                    </div>
                </div>
            </div>
        {{--@endif--}}
    </div>
</section>
