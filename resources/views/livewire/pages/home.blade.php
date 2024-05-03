<div>
    <x-blocks.hero-wrapper class="bg-green">
        @if($slider)
            <livewire:components.slider :slider="$slider" />
        @endif
    </x-blocks.hero-wrapper>

    <x-blocks.featured-posts :posts="$featuredPosts" class="mb-16" />

    <x-blocks.tabs />
</div>
