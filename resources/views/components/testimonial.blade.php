<div class="p-16">
    <div class="flex mb-8">
        <div class="rounded overflow-hidden min-w-[400px] h-fit relative -left-16">
            <img
                src="./assets/images/{{$testimonial['image']}}"
                alt="{{ $testimonial['author'] }}"
                class="w-full h-auto object-fill"
            />
        </div>
        <div>
            <div class="flex justify-between">
                <x-header-small class="text-white">{{ $testimonial['author'] }}</x-header-small>
                @if($testimonial['date'])
                    <p>{{ date_format($testimonial['date'], 'd.m.Y') }}</p>
                @elseif($testimonial['created_at'])
                    <p>{{ date_format($testimonial['created_at'], 'd.m.Y') }}</p>
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
