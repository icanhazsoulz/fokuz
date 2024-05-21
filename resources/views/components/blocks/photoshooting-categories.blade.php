@php
    $classes = 'min-h-dvh pb-20 bg-red';
    $posts = [
        'studio' => [
            'image' => 'studio.png',
            'title' => 'Studio',
            'slug' => 'prices#studio',
            'excerpt' => 'Mein Fotostudio ist wie ein zauberhaftes Theater, in dem jeder seine Rolle spielen! Ihre Tiere sind die Hauptdarsteller, Sie sind die Zuschauer, oder vielleicht ist Ihnen eine Nebenrolle zugedacht. Und ich bin der Regisseur dieses Theaters. Es spielt keine Rolle, wer von uns die Handlung entworfen hat, welche Rollen wir spielen oder welches Requisit auf der Bühne steht, denn jede unserer Aufführungen verdient es, für immer in Erinnerung zu bleiben.'
        ],
        'momente' => [
            'image' => 'momente.png',
            'title' => 'Momente',
            'slug' => 'prices#momente',
            'excerpt' => 'Jeder Moment in m Leben unserer Lieblingstiere birgt eine einzigartige Geschichte. Ich fotografiere Tiere dort, wo sie ganz sie selbst sind – in ihrer natürlichen Umgebung. Mit einem feinen Gespür für den richtigen Moment und einem Auge für das Detail, fange ich die Einzigartigkeit und die Persönlichkeit jedes Tieres ein. Ob überraschendes Spiel im Garten oder ausgelassene Freude beim Spaziergang, ich bin bereit, eure Geschichten überallhin zu folgen.'
        ],
        'reportage' => [
            'image' => 'reportage.png',
            'title' => 'Reportage',
            'slug' => 'prices#reportage',
            'excerpt' => 'Jedes Event ist voll einzigartiger Momente – von Aufregung bis zu Überraschungen. Meine Mission ist es sondern die Geschichte Ihres Events zu erzählen - die Atmosphäre, die Emotionen und die vielen kleinen Details einzufangen, die zusammenkommen, um Ihre Veranstaltung unvergesslich zu machen. Mit einem aufmerksamen Blick für die besonderen Interaktionen zwischen Tieren und Menschen schaffe ich eine lebendige, emotionale Erzählung Ihres besonderen Tages.'
        ],
    ];
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div class="container mx-auto pt-10 relative before:content-[''] before:w-full before:h-[900px] before:bg-white before:absolute before:left-0 before-r-0 before:top-0 before:rounded-bl-2xl before:rounded-br-2xl">
        <div class="max-w-[90%] mx-auto mb-16">
            <x-header class="text-primary-focused relative z-10">Was kostet</x-header>
            <x-subheader class="text-primary-focused relative z-10">Wunderbar, brillant, günstig</x-subheader>

            <ul class="flex gap-9 justify-center  mt-24 mx-auto relative before:content-[''] before:absolute before:-top-14 before:-left-32 before:-right-32 before:h-36 before:bg-shootingList before:bg-cover before:z-0 after:content-[''] after:absolute after:block after:h-80 after:top-20 after:-right-32 after:-left-32 after:bg-yellow after:z-0 after:rounded-lg;
            ">
                @foreach($posts as $post)
                    <li class="max-w-[320px] bg-white px-4 pt-4 pb-20 shadow-2xl rounded-xl relative z-10">
                        <x-post-card :post="(object) $post" />
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
