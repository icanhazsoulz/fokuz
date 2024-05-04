@php
    $classes = 'h-dvh pt-24';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div class="container mx-auto">
        <x-header class="text-primary-focused">Memoiren</x-header>
        <x-subheader class="text-primary-focused">Aktuellste, wichtigste, atemberaubende</x-subheader>

        <ul class="grid grid-cols-3 gap-8">
            @foreach($posts as $post)
                <li>
                    <div class="grid grid-rows-2 p-4 shadow-xl rounded-2xl">
                        <div class="mb-4 mx-auto">
                            <img src="assets/images/{{ $post->image }}" alt="{{ $post->title }}" width="320" height="320">
                        </div>
                        <div class="flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between mb-4">
                                    <span>{{ $post->post_category->category }}</span>
                                    <span class="text-end">{{ date_format($post->created_at, 'd.m.Y') }}</span>
                                </div>
                                <div class="mb-4">{{ $post->title }}</div>
                                <p>{{ $post->excerpt }}</p>
                            </div>
                            <a href="{{ $post->slug }}">Mehr sehen</a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
