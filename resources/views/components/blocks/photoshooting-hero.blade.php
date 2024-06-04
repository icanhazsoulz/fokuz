@php
    $classes = 'pt-32 pb-48 bg-yellow relative';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x-widgets.call class="bottom-20"></x-widgets.call>
    <x-container class="container mx-auto max-w-[1160px] relative">
        <livewire:socials-widget />

        <div class="mb-16">
            <x-header>Can sein</x-header>
            <x-subheader>ich liebe meine Arbeit</x-subheader>
        </div>
        <div class="pt-10 flex justify-center items-center relative">
            <x-squared-block class="before:w-1/2 before:h-1/3 before:-right-10  before:bg-white after:w-1/3 after:aspect-square after:-bottom-[20%] after:-left-[12%] after:bg-[#EDDEBA]">
                <div class="relative z-20 rounded overflow-hidden">
                    <img src="./assets/images/portfolio-page/hero/hero.jpg" alt="Yulia Kuznetcova">
                </div>
            </x-squared-block>
        </div>
    </x-container>
</section>
