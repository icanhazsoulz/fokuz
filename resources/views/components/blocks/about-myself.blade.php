@php
    $classes = 'min-h-dvh pb-20';
    $posts = [
        '1' => [
            'image' => '/about-page/about-list/1.jpg',
            'title' => 'Mein team',
            'comment' => '',
            'data' => '',
            'slug' => 'prices#studio',
            'excerpt' => 'Harvey gibt mir die Themen vor, in meinem Kopf entstehen
                    Ideen, mein Mann hilft, die notwendigen Requisiten
                    vorzubereiten. Wenn laut dem Szenario im Bild ein Mensch
                    zusammen mit einem Tier sein soll, hilft mir ein Mannequin
                    namens Josephine, Komposition und Licht zu bearbeiten.'
        ],
        'momente' => [
            'image' => '/about-page/about-list/2.jpg',
            'title' => 'Die 7 Pfoten meiner Foto philosophie',
            'comment' => '',
            'data' => '',
            'slug' => 'prices#momente',
            'excerpt' => 'Respekt vor der Individualität Anpassung und Komfort Ruhige
                    und sichere Umgebung Gewohnte Gegenstände Geduld und
                    Langsamkeit Sichere Handhabung Feedback vom Besitzer.'
        ],
        'reportage' => [
            'image' => '/about-page/about-list/3.jpg',
            'title' => 'Mein Fotostudio',
            'comment' => '',
            'data' => '',
            'slug' => 'prices#reportage',
            'excerpt' => 'Um all die tollen Momente festzuhalten, bildliche
                    Erinnerungen von meinen geliebten Tieren zu schaffen, die
                    mir keiner nehmen kann, begann ich schon früh mit dem
                    Fotografieren.'
        ],
    ];
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div class="container max-w-[1160px] mx-auto pt-10 relative before:content-[''] before:w-full before:h-[800px] before:bg-white before:absolute before:left-0 before:right-0 before-r-0 before:top-0 before:rounded-bl-2xl before:rounded-br-2xl">
        <div class="max-w-[90%] mx-auto mb-16">
            <x-header class="text-primary-focused relative z-10"> Ich über mich</x-header>
            <x-subheader class="text-primary-focused relative z-10">Wir sind die Besten</x-subheader>

            <x-points-block class="before:bg-red-points after:bg-green">
                <ul class="flex gap-9 justify-center relative z-20">
                    @foreach($posts as $post)
                        <li class="max-w-[320px] bg-white px-4 pt-4 pb-28 shadow-2xl rounded-xl relative z-10">
                            <x-post-card :post="(object) $post" />
                        </li>
                    @endforeach
                </ul>
            </x-points-block>
        </div>
    </div>
</section>
