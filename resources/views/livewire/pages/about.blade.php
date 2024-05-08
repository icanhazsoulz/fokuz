<div>
    <x-blocks.hero-wrapper class="bg-red">
        @if($slider)
            <livewire:components.slider :slider="$slider" />
        @endif
    </x-blocks.hero-wrapper>

    <x-blocks.photoshooting-categories class="mb-16" />
</div>
