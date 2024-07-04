@php
    $post = (object) $post;
    $post = [
        'image' => $post->image,
        'title' => $post->title,
        'created_at' => isset($post->created_at) ? $post->created_at : null,
        'text' => $post->excerpt,
        'slug' => $post->slug,
        'category' => isset($post->post_category) ? $post->post_category->category : null
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

        @if(isset($isPosts) && $isPosts)
            <x-header-small>{{ $post['title'] }}</x-header-small>
        @else
            <x-header-medium>{{ $post['title'] }}</x-header-medium>
        @endif

        <p>{{ $post['text'] }}</p>
        {{--<x-link href="{{ $post['slug'] }}">Mehr sehen</x-link>--}}
        <x-button-primary class="absolute bottom-10">Lass fragen</x-button-primary>
    </div>
</div>
