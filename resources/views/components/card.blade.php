@php
    /*$classes = 'bg-white rounded-2xl shadow-2xl px-10 py-10 mx-auto w-[537px]';*/

    $card = (object) $card;
    $card = [
        'title' => $card->title,
        'image' => $card->image,
        'alt' => $card->alt
    ];
@endphp

<div class="bg-white rounded-2xl shadow-2xl px-10 py-10 mx-auto mt-auto mb-20 max-w-[537px]"
>
    <h3 class="text-4xl font-text-title mb-3">{{ $card['title'] }}</h3>
    <img
        src="./assets/images/home-page/success/{{ $card['image'] }}"
        alt="{{ $card['alt'] }}"
        class="w-full"
    />
</div>

