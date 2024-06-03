<div class="px-8">
    <div class="flex justify-center gap-14">
        <div class="rounded overflow-hidden min-w-[400px] h-fit self-end relative -left-8">
            <img
                src="./assets/images/home-page/reviews-slider/{{$testimonial['image']}}"
                alt="{{ $testimonial['author'] }}"
                class="w-full h-auto object-fill"
            />
        </div>
        <div>
            <div class="flex justify-between">
                <x-header-small class="text-white">{{ $testimonial['author'] }}</x-header-small>
                @if($testimonial['date'])
                    <p>{{ $testimonial['date'] }}</p>
                @else
                    <p>{{ $testimonial['created_at'] }}</p>
                @endif
            </div>
            <div class="max-w-[450px] mb-10">
                {{ $testimonial['text'] }}
            </div>
            <x-link href="{{ $testimonial['url'] }}">{{ $testimonial['handle'] }}</x-link>
        </div>
    </div>
    <div class="flex justify-between">
        <x-link href="#">Mehr sehen</x-link>
        <div>Slider buttons HERE</div>
    </div>
</div>
