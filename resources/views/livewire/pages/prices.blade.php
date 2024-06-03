<div class="mx-auto">
    <section>
        <div class="mx-auto">
            <x-header>{{ $title }}</x-header>
            <x-subheader>{{ $subtitle }}</x-subheader>
        </div>
    </section>
    <section>
        <div class="container mx-auto">
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
        </div>
    </section>
    <x-blocks.featured-posts :posts="$featuredPosts" class="mb-16" />
</div>
