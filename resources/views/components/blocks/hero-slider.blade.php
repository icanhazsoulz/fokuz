@php
    $classes = 'pt-32 pb-48 relative';
    $mediaItems = $slider->getMedia('default');
    $hasSlider = count($mediaItems) > 1;
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x-widgets.call class="bottom-20"></x-widgets.call>
    <x-container class="container mx-auto max-w-[1160px] relative">
        <livewire:socials-widget />
        <x-button-primary class="absolute bottom-44 left-12 z-30">
            Frag mich mal
        </x-button-primary>
        <div class="mb-16">
            <x-header class="text-white tracking-tighter">{{ $title }}</x-header>
            <x-subheader class="text-white">{{ $subtitle }}</x-subheader>
        </div>
        <div class="pt-10 flex justify-center items-center relative">
            <x-squared-block class="before:w-[90%] before:left-1/2 before:h-1/3 before:bg-white after:aspect-square after:top-[16%] after:-left-[60%] after:bg-[#EDDEBA]">
                <div class="relative z-20 rounded overflow-hidden">
                    @if($hasSlider)
                        {{-- output slider --}}
                    @else
                        <img src="{{ $mediaItems[0]->getUrl() }}" alt="">
                    @endif
                </div>
            </x-squared-block>
        </div>
    </x-container>
</section>
