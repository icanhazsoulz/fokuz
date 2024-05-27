@php
    $classes = 'w-screen mb-28 pt-12 relative pb-10 before:content-[""] before:absolute before:z-10 before:top-0 before:left-0 before:right-0 before:w-full before:h-[500px] before:bg-green';
    $memories = [
        '1' => [
            'image' => '/home-page/memory/memory-list/memory1.jpg',
            'title' => 'Ein ungewöhnlicher Spaziergang: Wenn...',
            'category'=> 'Handlungen',
           // 'created_at'=> '2024/03/28',
            'slug' => 'prices#studio',
            'excerpt' => 'Beobachte eine ungewöhnliche Familie aus drei Hunden auf einem
                  Frühlingsspaziergang: eine elegante Mama-Spaniel, einen
                  Papa-Mops mit Fliege und ...'
        ],
        '2' => [
            'image' => '/home-page/memory/memory-list/memory2.jpg',
            'title' => 'Fußballleidenschaft auf vier Pfoten:...',
            'category' => 'Kulissen',
            //'created_at' => '2022/07/05',
            'slug' => 'prices#momente',
            'excerpt' => ' auchen Sie ein in ein unvergessliches Fotoshooting, bei dem
                  ein Hund und sein Herrchen zu echten Fußballfans werden!'
        ],
        '3' => [
            'image' => '/home-page/memory/memory-list/memory3.jpg',
            'title' => 'Kaninchen liebesgeschichte',
            'category'=> 'Handlungen',
            //'created_at'=> '21/03/2024',
            'slug' => 'prices#reportage',
            'excerpt' => 'Liebesgeschichte von zwei kleinen HerzchenGenau wie der
                  Dichter es beschreibt'
        ],
    ];
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div class="container container max-w-[1160px] mx-auto relative">
        <div class="mb-16">
            <x-header class="text-primary-focused relative z-10">Memoiren</x-header>
            <x-subheader class="text-primary-focused relative z-10">Aktueliste, wichtigste, atemberaubende</x-subheader>
            <div class="max-w-[1080px] mx-auto relative before:content-[''] before:absolute before:-top-14 before:-left-32 before:-right-32 before:h-36 before:bg-white-points  before:bg-cover before:z-10 after:content-[''] after:absolute after:block after:h-80 after:top-20 after:-right-32 after:-left-32 after:bg-yellow after:z-10 after:rounded-lg">
                <ul class="flex gap-9 overflow-hidden px-5 pb-10  mt-24 mx-auto relative ;
                ">
                    @foreach($memories as $memory)
                        <li class="max-w-[320px] bg-white px-4 pt-4 pb-20 shadow-xl rounded-xl relative z-20">
                            <x-post-card :post="(object) $memory" />
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
