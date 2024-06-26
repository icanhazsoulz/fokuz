<div>
    <x-blocks.hero-wrapper class="bg-green" />

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
