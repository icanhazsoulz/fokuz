<div>
    <x-blocks.hero-slider
        class="bg-{{ $heroBackgroundColor }}"
        :title="$title"
        :subtitle="$subtitle"
        :slider="$slider"
    />

    {{--<x-blocks.home-about />--}}

    <x-blocks.overflow-section class="bg-red" />

    <x-blocks.photoshooting-categories />

    <x-blocks.success />

    <x-blocks.overflow-slider :testimonials="$featuredTestimonials" />

    <x-blocks.cta-cols /> {{-- CTA = Call to Action --}}

    <x-blocks.shelter-help />

    <x-blocks.cta-rows class="mb-24" />

    <x-blocks.featured-posts :posts="$featuredPosts" :isPosts="true" />

    <x-blocks.tabs />
</div>
