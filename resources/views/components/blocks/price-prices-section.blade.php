@php
    $classes = 'mb-28 relative -mt-[700px]';

    $prices = $prices;
@endphp

<section>
    <x-container>
        @foreach($prices as $price)
            <div class="">
                <div>{{ $price->title }}</div>
                <div>{{ $price->subtitle }}</div>
                <div class="flex">
                    <img src="assets/images/{{ $price->image }}" alt="{{ $price->$title }}">
                    <div class="grid grid-cols-2 grid-rows-2 p-8">
                        <div>{{ $price->text }}</div>
                        <div class="mx-auto">Conditions{{ $price->conditions }}</div>
                        <div>PREIS {{ $price->price }}€</div>
                        <div class="mx-auto"><x-button-primary>Jetzt buchen</x-button-primary></div>
                    </div>
                </div>
            </div>
        @endforeach
    </x-container>
</section>
