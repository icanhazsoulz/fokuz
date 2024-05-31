@php
    /*$classes = "bg-white rounded-2xl shadow-2xl px-10 py-10 mx-auto w-[537px]";*/

    $item = (object) $item;
    $item = [
        'term' => $item->term,
        'description' => $item->description
    ];
@endphp
{{--{{ $attributes->merge(['class' => $classes]) }} --}}
<ul>
    <x-list-item>
        <p>
            {{ $item['term'] }}
        </p>
        <p>
            {{ $item['description'] }}
        </p>
    </x-list-item>
</ul>
