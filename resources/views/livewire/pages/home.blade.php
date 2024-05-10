<div>
    <x-blocks.hero-wrapper class="bg-green pb-80">
        @if($slider)
            <livewire:components.slider :slider="$slider" />
        @endif
    </x-blocks.hero-wrapper>

    <x-blocks.tabs />
</div>
