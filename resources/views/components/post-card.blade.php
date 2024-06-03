@php
    $post = (object) $post;
    $post = [
        'image' => $post->image,
        'title' => $post->title,
        'created_at' => isset($post->created_at) ? $post->created_at : null,
        'text' => $post->excerpt,
        'slug' => $post->slug,
        'category' => isset($post->post_category) ? $post->post_category->category : null,
    ];
@endphp
<div>
    <div class="mb-6 aspect-[3/2]">
        <img src="assets/images/{{ $post['image'] }}" alt="{{ $post['title'] }}" width="320">
    </div>
    <div class="flex flex-col">
        @if($post['category'] or $post['created_at'])
            <div class="flex justify-between">
                    @if($post['category'])
                        <x-subheader>{{ $post['category'] }}</x-subheader>
                    @endif

                    @if($post['created_at'])
                        <p>{{ date_format($post['created_at'], 'd.m.Y') }}</p>
                    @endif
            </div>
        @endif
        <x-header-small class="font-medium">{{ $post['title'] }}</x-header-small>
        <p>{{ $post['text'] }}</p>
        <a class="font-serif text-gray-400 hover:text-gray-300 transition-all duration-200 text-4xl block  absolute bottom-4 left-4" href="{{ $post['slug'] }}">Mehr sehen</a>
    </div>
</div>
