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
<div class="flex flex-col p-4 shadow-xl rounded-2xl">
    <div class="mb-4 mx-auto">
        <img src="assets/images/{{ $post['image'] }}" alt="{{ $post['title'] }}" width="320" height="320">
    </div>
    <div class="flex flex-col justify-between">
        <div>
            <div class="flex justify-between mb-4">
                @if($post['category'])
                    <span>{{ $post['category'] }}</span>
                @endif

                @if($post['created_at'])
                    <span class="text-end">{{ date_format($post['created_at'], 'd.m.Y') }}</span>
                @endif

            </div>
            <div class="mb-4">{{ $post['title'] }}</div>
            <p>{{ $post['text'] }}</p>
        </div>
        <a href="{{ $post['slug'] }}">Mehr sehen</a>
    </div>
</div>
