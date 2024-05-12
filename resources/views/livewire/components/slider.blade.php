<div class="relative">
    <div class=""></div>
    <div class="relative">
{{--    TODO: all slider images    --}}
        @if(count($slider->getMedia()))
            <img src="{{ $slider->getMedia()[0]->getUrl() }}" alt="" class="h-96">
        @endif
    </div>
</div>
