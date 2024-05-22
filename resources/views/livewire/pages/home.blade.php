<div>
    <x-blocks.hero-wrapper class="bg-green">
        @if($slider)
            <livewire:components.slider :slider="$slider" />
        @endif
    </x-blocks.hero-wrapper>

    {{--<x-blocks.home-about />--}}

    <x-blocks.overflow-section class="bg-red"></x-blocks.overflow-section>

    <x-blocks.photoshooting-categories></x-blocks.photoshooting-categories>

    <x-blocks.success></x-blocks.success>

    <x-blocks.overflow-slider></x-blocks.overflow-slider>

    <x-blocks.discount-100></x-blocks.discount-100>

    <x-blocks.shelter-help></x-blocks.shelter-help>

    <x-blocks.discount-50></x-blocks.discount-50>

    <x-blocks.tabs />
</div>
