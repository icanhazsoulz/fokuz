@php
    $classes = 'min-h-dvh pb-20';
    $posts = [
        '1' => [
            'image' => '/about-page/about-list/1.jpg',
            'title' => 'Mein team',
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
            'slug' => 'prices#momente',
            'excerpt' => 'Respekt vor der Individualität Anpassung und Komfort Ruhige
                    und sichere Umgebung Gewohnte Gegenstände Geduld und
                    Langsamkeit Sichere Handhabung Feedback vom Besitzer.'
        ],
        'reportage' => [
            'image' => '/about-page/about-list/3.jpg',
            'title' => 'Mein Fotostudio',
            'slug' => 'prices#reportage',
            'excerpt' => 'Um all die tollen Momente festzuhalten, bildliche
                    Erinnerungen von meinen geliebten Tieren zu schaffen, die
                    mir keiner nehmen kann, begann ich schon früh mit dem
                    Fotografieren.'
        ],
    ];
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x-container class="pt-10 before:content-[''] before:w-full before:h-[800px] before:bg-white before:absolute before:left-0 before:right-0 before-r-0 before:top-0 before:rounded-bl-2xl before:rounded-br-2xl">
        <div class="max-w-[90%] mx-auto mb-16">
            <x-header class="relative z-10">Ich über mich</x-header>
            <x-subheader class="relative z-10">Wir sind die Besten</x-subheader>

            <x-points-block class="before:bg-red-points after:bg-green">
                <ul class="flex gap-9 justify-center relative z-20">
                    @foreach($posts as $post)
                        <li class="flex max-w-[320px]">
                            <x-card-layout class="px-4 pt-4 pb-28 ">
                                <x-post-card :post="(object) $post" />
                            </x-card-layout>
                        </li>
                    @endforeach
                </ul>
            </x-points-block>
        </div>
    </x-container>
</section>
