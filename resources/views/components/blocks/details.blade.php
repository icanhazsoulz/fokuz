@php
    $classes = 'relative pb-14 mb-32';

    $items = [
        '1' => [
            'svg' => 'settings',
            'title' => 'Persönliche Vorbereitung',
            'text' => 'Deine Ideen inspirieren mich! Ich bespreche alle Details vor dem
                Shooting mit dir – vom Ort bis zur Kleidung. Schreib mir, um das
                perfekte Szenario auszuwählen.',
            'color' => 'text-primary'
        ],
        '2' => [
            'svg' => 'origin',
            'title' => 'Lockere Fotosession',
            'text' => 'Entspann dich und genieße die Zeit zusammen mit deinem Haustier.
                Kein Stress, nur Freude und Gemütlichkeit. Buche deinen
                glücklichen Moment!',
            'color' => 'text-green'
         ],
        '3' => [
            'svg' => 'anchor',
            'title' => 'Feste Preise für die Session',
            'text' => 'Möchtest du ein Shooting nur für dein Haustier oder die ganze
                Familie einbeziehen? Egal, ob ein oder mehrere Haustiere – der
                Preis bleibt gleich. Die Wahl liegt bei dir! Ein Fest, das
                verbindet.',
            'color' => 'text-red'
        ],
        '4' => [
            'svg' => 'inbox',
            'title' => 'Online-Galerie',
            'text' => 'Wähle und bestelle Fotos aus einer bequemen Online-Galerie.
                Deine persönliche Ausstellung ist jederzeit zugänglich.',
            'color' => 'text-yellow'
        ],
        '5' => [
            'svg' => 'umbrella',
            'title' => 'Unterstützung für Tiere in Not',
            'text' => 'Mit jeder Fotosession hilfst du bedürftigen Tieren. 20% meines
                Honorars gehen an das von dir gewählte Tierheim.',
            'color' => 'text-green'
        ],
         '6' => [
            'svg' => 'basketball',
            'title' => 'Requisiten und Outfits',
            'text' => 'Nutze meine Requisitensammlung oder bring deine eigenen
                Accessoires mit. Für besondere Wünsche biete ich
                maßgeschneiderte Anfertigungen gegen Aufpreis an.',
            'color' => 'text-yelow'
        ],
         '7' => [
            'svg' => 'spam',
            'title' => 'Über die Standardpreise hinaus',
            'text' => 'Für Strecken über 50 km von 58791 Werdohl werden zusätzlich 0,50
                € pro Kilometer berechnet. Professionelle Bilder in Druck- und
                Webqualität sind zusätzlich für 15 Euro pro Stück verfügbar.',
            'color' => 'text-red'
        ]
    ];
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div
        class="absolute -bottom-20 right-0 w-[400px] pb-24 after:content-[''] after:w-64 after:h-32 after:absolute after:block after:-left-12 after:bottom-12 after:bg-green"
    >
        <img src="./assets/images/prices-page/details.jpg" alt="" class="min-w-full relative z-10"/>
    </div>
    <x-container>
        <x-header-medium>&#42;7 "immer bei mir"</x-header-medium>
        <ul class="flex gap-x-9 gap-y-20 flex-wrap">
            @foreach($items as $item)
                <li>
                    <x-items-list :item="$item" />
                </li>
                {{--<li class="w-64">
                    <svg class="w-12 h-12 mb-4 {{ $detail['color'] }}">
                        <use
                            class="transition-all duration-200"
                            href="./assets/icons/icons-sprite.svg#{{ $detail['svg'] }}"
                        ></use>
                    </svg>
                    <h3>{{ $detail['title'] }}</h3>
                    <div>
                        {{ $detail['text'] }}
                    </div>
                </li>--}}
            @endforeach
        </ul>
    </x-container>
</section>
