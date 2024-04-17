<div class="relative">
    <div class="absolute hero-rectangles-bg left-0 right-0 top-0 bottom-0"></div>
    <div class="relative">
        @if(count($slider->getMedia()))
            <img src="{{ $slider->getMedia()[0]->getUrl() }}" alt="">
        @else
            <h2>No images yet</h2>
        @endif
    </div>
</div>
