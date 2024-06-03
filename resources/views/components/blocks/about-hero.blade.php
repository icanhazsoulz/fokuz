@php
    $classes = 'text-font-color-2 pt-32 pb-48 relative';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x-widgets.call class="bottom-20"></x-widgets.call>
    <x-container class="container mx-auto max-w-[1160px] relative">
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
                <x-squared-block class="before:w-[90%] before:left-1/2 before:h-1/3 before:bg-white after:aspect-square after:top-[16%] after:-left-[60%] after:bg-[#EDDEBA]">
                    <div class="relative z-20 rounded overflow-hidden">
                        <img src="./assets/images/about-page/about-hero.jpg" alt="Yulia Kuznetcova">
                    </div>
                </x-squared-block>
                {{--</div>--}}
            </div>
        {{--@endif--}}
    </x-container>
</section>
