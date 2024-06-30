<div>
    <x-blocks.hero-slider
        class="bg-{{ $heroBackgroundColor }}"
        :title="$title"
        :subtitle="$subtitle"
        :slider="$slider"
    />

    <x-blocks.about-overflow-section class="bg-yellow" />

    <x-blocks.about-myself class="bg-yellow" />

    <x-blocks.overflow-slider :testimonials="$featuredTestimonials" />

    <x-blocks.about-partners />

    <x-blocks.awards />

    <x-blocks.subscribe />
</div>
