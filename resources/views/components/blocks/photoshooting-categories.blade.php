@php
    $classes = 'h-dvh pt-24';
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
    <div class="container mx-auto">
        <x-header class="text-primary-focused">Was kostet</x-header>
        <x-subheader class="text-primary-focused">Wunderbar, brillant, günstig</x-subheader>

        <ul class="grid grid-cols-3 gap-8">
            @foreach($posts as $post)
                <li>
                    <x-post-card :post="(object) $post" />
                </li>
            @endforeach
        </ul>
    </div>
</section>
