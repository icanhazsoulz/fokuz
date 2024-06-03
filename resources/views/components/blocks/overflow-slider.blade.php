@php
    $classes = 'relative';

     $slides = [
        [
            "author" => "Olesya Poruchnyk",
            "date" => "18.02.2024",
            "text" => "Überwältigt von der Hundefotografin Julia: Ihre Bilder sind wahre Kunst, die Seelen meiner zwei Hunde und meines Katers einfangen. Mit Talent, Leidenschaft und einem Auge fürs Detail macht sie jede Session einzigartig. Unvergessliche Erinnerungen, absolut empfehlenswert!",
            "link-text" => "@kinolog.lapki.nrw",
            "link" => "",
            'image' => '1.jpg',
            ],
        [
             "author" => "@promama_lera",
             "date" => "17.10.2023",
             "text" => "Hallo, danke für unsere Fotos mit Lunochka 😍 Die Aufnahmen sind so lebendig geworden, mir hat alles sehr gefallen, man sieht, dass es Ihnen viel Freude bereitet und man spürt neben Ihrem Professionalismus auch eine große Liebe zu Tieren ☺️ Ich erinnere mich, wie Sie damals noch mit einem Gips am Bein gearbeitet haben, aber das hat Sie nicht davon abgehalten, die schönsten und erfolgreichsten Aufnahmen von Luna und den anderen Hunden zu machen 🙈😍 Ich bewundere Ihren Beruf, Sie machen Hundebesitzer glücklicher 🥰 Ich wünsche Ihnen mehr Ideen und mehr Möglichkeiten zu deren Umsetzung 🙏🏻☺️",
             "link-text" => "@promama_lera",
             "link" => "",
            'image' => '2.jpg',
        ],
        [
             "author" => "vomhoennetal",
             "date" => "28.03.2024",
             "text" => "Liebe Julia hat uns heute besucht!  Sie kam zu uns nach Hause und machte Fotos mit meinen Kaninchen.  Zuerst hat sie alle ihre Sachen für das Shooting mitgebracht und dann haben wir alles an seinen Platz gebracht.  Es ist sehr lustig, wie viele interessante Dinge sie dabei hatte.  Unterschiedliche Hintergründe und allerlei Kleinigkeiten.  Wir haben verschiedene Motive ausprobiert, es war toll, die Kaninchen spielten die Hauptrolle und es hat sogar Spaß gemacht. Sehr einfühlsame und nette Fotografin! Wir freuen uns darauf, Julia wiederzusehen!",
             "link-text" => "@vomhoennetal",
             "link" => "",
            'image' => '3.jpg',
        ],
        [
            "author" => "Hundeschule Lapki",
            "date" => "29.09.2024",
            "text" => "Ich bin absolut begeistert von der Hundefotografin Julia, die schon seit einiger Zeit die besonderen Momente unserer vierbeinigen Freunde festhält. Ihre Arbeit ist einfach beeindruckend und hat mir persönlich sehr geholfen. Die Fotos, die sie macht, sind mehr als nur Bilder – sie sind echte Kunstwerke, die Persönlichkeit und die einzigartigen Charakterzüge jedes Hundes einfangen. Besonders während der Gruppenstunden in unserer Hundeschule Lapki in Mettmann beweist sie immer wieder aufs Neue ihr außergewöhnliches Talent und Gespür für den richtigen Moment. Jedes Mal, wenn sie bei uns ist, freue ich mich schon auf die wunderbaren Fotos, die entstehen. Sie hat nicht nur ein gutes Auge für die besonderen Momente, sondern versteht es auch, eine entspannte Atmosphäre zu schaffen, in der sich sowohl Hunde...",
            "link-text" => "",
            "link" => "",
            'image' => '4.jpg',
]
    ];

@endphp

<div class="w-screen overflow-hidden">
    <div class="flex">
        @foreach($slides as $slide)
        <section class="min-w-full grow bg-primary">
            <x-container class="px-0">
                <div class="bg-white pt-20 px-14 pb-24 relative rounded-bl-2xl relative rounded-br-2xl">

                    <div
                        class="bg-primary text-white pt-16 rounded-2xl relative"
                    >
                        <x-header class="text-white text-center tracking-tighter">Man über mich</x-header>
                        <div class="flex flex-row-reverse justify-center gap-14 pt-10 px-8 pb-28">
                            <div>
                                <div class="mb-8">
                                    <x-header-medium>
                                        <x-comment class="text-2xl"> {{$slide['author']}} </x-comment>
                                        <x-date> {{ $slide['date'] }} </x-date>
                                    </x-header-medium>
                                </div>
                                <div class="max-w-[450px] mb-10">
                                    {{ $slide['text'] }}
                                </div>

                                <a href='{{ $slide["link"] }}' class="font-serif text-3xl text-gray-400 font-bold tracking-widest">{{ $slide['link-text'] }}</a>

                            </div>
                            <div
                                class="rounded overflow-hidden min-w-[400px] h-fit self-end relative -left-8"
                            >
                                <img
                                    src="./assets/images/home-page/reviews-slider/{{$slide['image']}}"
                                    alt="Da bin ich"
                                    class="w-full h-auto object-fill"
                                />
                            </div>
                        </div>
                            <x-widgets.see-more-btn />
                        </div>
                </div>
            </x-container>
        </section>
        @endforeach
    </div>
</div>
