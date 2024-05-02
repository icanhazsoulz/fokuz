<div>
    <x-layouts.hero-wrapper class="bg-green">
        @if($slider)
            <livewire:components.slider :slider="$slider" />
        @endif
    </x-layouts.hero-wrapper>
    <x-layouts.tabs />
</div>
