<div>
    <x-blocks.hero-wrapper class="bg-green">
        @if($slider)
            <livewire:components.slider :slider="$slider" />
        @endif
    </x-blocks.hero-wrapper>

    <x-blocks.overflow-design-section></x-blocks.overflow-design-section>

    <x-blocks.photoshooting-categories></x-blocks.photoshooting-categories>

    <x-blocks.tabs />
</div>
