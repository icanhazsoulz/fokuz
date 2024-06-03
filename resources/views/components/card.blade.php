@php
    /*$classes = "bg-white rounded-2xl shadow-2xl px-10 py-10 mx-auto w-[537px]";*/

    $card = (object) $card;
    $card = [
        'title' => $card->title,
        'image' => $card->image,
        'alt' => $card->alt,
        'description' => $card->description
    ];
@endphp
{{--{{ $attributes->merge(['class' => $classes]) }} --}}
<x-card-layout>
    <x-card-title class="max-w-72">{{ $card['title'] }}</x-card-title>
    <img
        src="{{ $card['image'] }}"
        alt="{{ $card['alt'] }}"
        class="w-full"
    />
    <p class="italic">{{ $card['description'] }}</p>

</x-card-layout>

