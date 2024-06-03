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
    <x-container>
        <div class="mb-16">
            <x-header class="text-primary-focused relative z-10">Memoiren</x-header>
            <x-subheader class="text-primary-focused relative z-10">Aktueliste, wichtigste, atemberaubende</x-subheader>
            <x-points-block class="max-w-[1080px] before:bg-white-points after:bg-yellow">
                <ul class="flex gap-9 overflow-hidden px-5 pb-10  mt-24 mx-auto relative ;
                ">
                    @foreach($memories as $memory)
                        <li class="flex max-w-[320px]">
                            <x-card-layout class="px-4 pt-4 pb-20">
                                <x-post-card :post="(object) $memory" />
                            </x-card-layout>
                        </li>
                    @endforeach
                </ul>
            </x-points-block>
        </div>
    </x-container>
</section>
