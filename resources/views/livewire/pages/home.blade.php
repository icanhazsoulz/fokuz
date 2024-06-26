<div>
    <x-blocks.hero-wrapper class="bg-green"> </x-blocks.hero-wrapper>

    {{--<x-blocks.home-about />--}}

    <x-blocks.overflow-section class="bg-red"></x-blocks.overflow-section>

    <x-blocks.photoshooting-categories />

    <x-blocks.success></x-blocks.success>

    <x-blocks.overflow-slider :testimonials="$featuredTestimonials" />

    <x-blocks.discount-100 />

    <x-blocks.shelter-help />

    <x-blocks.discount-50 class="mb-24" />

    <x-blocks.featured-posts :posts="$featuredPosts" />

    <x-blocks.tabs />
</div>
