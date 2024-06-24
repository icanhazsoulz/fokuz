@php
    $item = (object) $item;
    $item = [
        'image' => $item->image,
        'title' => $item->title,
        'subtitle' => $item->subtitle,
        'time' => $item->time,
        'date' => $item->date,
        'location' => $item->location,
        'text' => $item->text,
    ];
@endphp

<div class = 'w-fit flex flex-row-reverse justify-[left] gap-14 relative'
>
    <div class="pb-44 relative">
        <div class="max-w-[520px] px-4">
            <x-header-small>{{ $item['title'] }}</x-header-small>
            <x-paragraph class="italic">
                {{ $item['subtitle'] }}
            </x-paragraph>
            <x-paragraph class="italic">
                <span class="block">Datum: {{ $item['date'] }}</span>
                <span class="block">Zeit: {{ $item['time'] }}</span>
                <span class="block">UhrOrt: {{ $item['location'] }}</span>
            </x-paragraph>

            <div>
                @foreach($item['text'] as $paragraph)
                    <x-paragraph>{{ $paragraph }}</x-paragraph>
                @endforeach
            </div>
        </div>
    </div>
    <div
        class="relative rounded overflow-hidden min-w-[400px] h-fit"
    >
        <img
            src="./assets/images/{{ $item['image'] }}"
            alt="dogs running on the lane"
            class="w-full h-auto object-fill"
        />
    </div>
</div>
