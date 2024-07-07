@php
    $classes = 'min-h-dvh pb-20 relative pb-10 before:content-[""] before:absolute before:z-10 before:top-0 before:left-0 before:right-0 before:w-full before:h-[500px] before:bg-red';
    $posts = [
        '1' => [
            'image' => '/about-page/parthner-list/1.jpg',
            'title' => 'Hundezentrum Lapki',
            'slug' => '',
            'excerpt' => ''
        ],
        '2' => [
            'image' => '/about-page/parthner-list/2.jpg',
            'title' => 'Hundeatelier Pet Patterns',
            'slug' => '',
            'excerpt' => ''
        ],
        '3' => [
            'image' => '/about-page/parthner-list/3.jpg',
            'title' => 'Fotograf Julia  Kuznetcova',
            'slug' => '',
            'excerpt' => ''
        ],
    ];
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x-container class="pt-20 before:content-[''] before:w-full before:h-[800px] before:bg-white before:absolute before:left-0 before:right-0 before-r-0 before:top-0 before:rounded-bl-2xl before:rounded-br-2xl">
        <div class="max-w-[90%] mx-auto mb-16">
            <x-header class="text-white relative z-10">
                <span>Partner</span>
                <x-page-link />
            </x-header>
            <x-subheader class="text-white relative z-10">das Neueste und Relevanteste</x-subheader>
            <x-points-block class="before:bg-white-points  after:bg-green">
                <ul class="flex gap-9 justify-center">
                    @foreach($posts as $post)
                        <li class="flex max-w-[320px] relative z-20">
                            <x-card-layout class="px-4 pt-4 pb-28">
                                <x-post-card :post="(object) $post" />
                            </x-card-layout>
                        </li>
                    @endforeach
                </ul>
            </x-points-block>
        </div>
    </x-container>
</section>
