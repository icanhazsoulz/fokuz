<div class="p-16">
    <div class="columns-2 gap-12 mb-8">
        <div class="rounded overflow-hidden min-w-[400px] h-fit relative">
            <img
                src="./assets/images/{{$post['image']}}"
                alt="{{ $post['title'] }}"
                class="w-full h-auto object-fill"
            />
        </div>
        <div>
            <div class="flex justify-between">
                <x-header-small><a href="/blog/{{ $post['slug'] }}">{{ $post['title'] }}</a></x-header-small>
                @if($post['date'])
                    <p class="text-primary-focused">{{ date_format($post['date'], 'd.m.Y') }}</p>
                @elseif($post['created_at'])
                    <p class="text-primary-focused">{{ date_format($post['created_at'], 'd.m.Y') }}</p>
                @endif
            </div>
            <x-paragraph class="max-w-[450px] mb-10">
                {!! $post['excerpt'] !!}
            </x-paragraph>
            <x-link href="{{ $post['url'] }}">{{ $post['handle'] }}</x-link>
        </div>
    </div>
    <div class="columns-2 gap-12">
        <div>Slider buttons HERE</div>
        <x-link href="/blog/{{ $post['slug'] }}">Mehr sehen</x-link>
    </div>
</div>
