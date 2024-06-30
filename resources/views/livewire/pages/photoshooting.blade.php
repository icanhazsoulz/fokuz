<div>
    <x-blocks.hero-slider
        class="bg-{{ $heroBackgroundColor }}"
        :title="$title"
        :subtitle="$subtitle"
        :slider="$slider"
    />

    <x-blocks.photoshooting-overflow />

    <x-blocks.photoshooting-categories />

    <x-blocks.faq-overflow />

    <x-blocks.take-part />

    <x-blocks.subscribe />
</div>

