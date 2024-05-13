<div>
    <x-blocks.hero-wrapper class="bg-green">
        @if($slider)
            <livewire:components.slider :slider="$slider" />
        @endif
    </x-blocks.hero-wrapper>

    <x-blocks.rounded-design-section></x-blocks.rounded-design-section>

    <x-blocks.tabs />
</div>
