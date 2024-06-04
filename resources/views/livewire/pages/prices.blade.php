<div>
    <x-blocks.price-hero></x-blocks.price-hero>
    {{--<section>
        <div class="mx-auto">
            <x-header>{{ $title }}</x-header>
            <x-subheader>{{ $subtitle }}</x-subheader>
        </div>
    </section>--}}
    {{--<x-blocks.price-prices-section></x-blocks.price-prices-section>--}}

    <section class="-mt-28 mb-28 relative">
        <x-container class="max-w-[1270px]">
            @foreach($prices as $price)
                <div class="mb-10">
                    <div class="max-w-[1160px] px-14 pt-14 pb-8 mx-auto rounded-tl-xl rounded-tr-xl bg-white">
                        <x-header-medium class="mb-5">{{ $price->title }}</x-header-medium>
                        <x-subheader class="!mb-0">{{ $price->subtitle }}</x-subheader>
                    </div>
                    <x-card-layout class="max-w-full !p-0 rounded-3xl flex">
                        <div class="!w-[40%] grow">
                            <img src="assets/images/{{ $price->image }}" alt="{{ $price->$title }}" class="w-full h-full -">
                        </div>
                        <div class="w-[60%] grid grid-cols-2 grid-rows-3 px-10 py-12">
                            <div class="row-span-2">{{ $price->text }}</div>
                            <div class="mx-auto row-span-2">Conditions{{ $price->conditions }}</div>
                            <x-header-medium class="mt-auto mb-auto self-center">PREIS {{ $price->price }}€</x-header-medium>
                            <div class="mx-auto self-end"><x-button-primary class="!mt-auto !mb-0">Jetzt buchen</x-button-primary></div>
                        </div>
                    </x-card-layout>
                </div>
            @endforeach
        </x-container>
    </section>

    <x-blocks.featured-posts :posts="$featuredPosts" class="!mb-10" />

    <x-blocks.subscribe />
</div>
