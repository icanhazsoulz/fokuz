@php
    $classes = 'mb-20 dark:bg-slate-800 dark:text-white relative before:content-[""] before:absolute before:top-0 before:left-0 before:w-full before:h-1/2 before:bg-yellow before:z-0 pt-20';

     $cards = [
        "0" => [
            "title" => "Dog photographer of the year",
            "image" => "./assets/images/about-page/awards/1.jpg",
            "alt" => "a man and a dog with germany flags",
            "description" => "Kategorie 'Rescued Dogs' 2019"
        ],
        "1" => [
            "title" => "Dog photographer of the year",
            "image" => "./assets/images/about-page/awards/2.jpg",
            "alt" => "running dog with a stick",
            "description" => "OVERALL WINNER 2019"
        ],
        "2" => [
            "title" => "Pet Photographer of the year 2019",
            "image" => "./assets/images/about-page/awards/3.jpg",
            "alt" => "black and white rabbit",
            "description" => "Kategorie 'Rescued Dogs' 2019"
        ]
    ];
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div class="container mx-auto">
        <div class="mb-10 relative">
            <x-header>Awards</x-header>
            <x-subheader>das Neueste und Relevanteste</x-subheader>
        </div>
        <div class="-mt-24 success__grid grid grid-cols-2 auto-rows-auto gap-10 relative z-10">

            @foreach($cards as $card)
                {{--<li class="max-w-[320px] bg-white px-4 pt-4 pb-20 shadow-2xl rounded-xl relative z-10">
                    <x-post-card :post="(object) $post" />
                </li>--}}
                <x-card :card="(object) $card" />
            @endforeach
            <div>
                <ul class="max-w-[450px] mx-auto list-disc">
                    <li>Dog Photographer of the year 2019 Category Rescued dogs</li>
                    <li>Nikon Female Facets Top 5 2022</li>
                    <li>Honorable Mentions – Intl. Photography Awards 2023</li>
                    <li>
                        Honarable Mentions – Refocus Awards Black and White Contest
                        2023
                    </li>
                    <li>
                        Gold Award – Nature Pets Budapest International Fotoawards
                        2023
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
