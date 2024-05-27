@php
    $classes = 'min-h-dvh pb-20 relative pb-10 before:content-[""] before:absolute before:z-10 before:top-0 before:left-0 before:right-0 before:w-full before:h-[500px] before:bg-red';
    $posts = [
        '1' => [
            'image' => '/about-page/parthner-list/1.jpg',
            'title' => 'Hundezentrum Lapki',
            'comment' => '',
            'data' => '',
            'slug' => '',
            'excerpt' => ''
        ],
        '2' => [
            'image' => '/about-page/parthner-list/2.jpg',
            'title' => 'Hundeatelier Pet Patterns',
            'comment' => '',
            'data' => '',
            'slug' => '',
            'excerpt' => ''
        ],
        '3' => [
            'image' => '/about-page/parthner-list/3.jpg',
            'title' => 'Fotograf Iuliia Kuznetcova',
            'comment' => '',
            'data' => '',
            'slug' => '',
            'excerpt' => ''
        ],
    ];
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div class="container max-w-[1160px] mx-auto pt-20 relative before:content-[''] before:w-full before:h-[800px] before:bg-white before:absolute before:left-0 before:right-0 before-r-0 before:top-0 before:rounded-bl-2xl before:rounded-br-2xl">
        <div class="max-w-[90%] mx-auto mb-16">
            <x-header class="text-white relative z-10">Partner</x-header>
            <x-subheader class="text-white relative z-10">das Neueste und Relevanteste</x-subheader>

            <ul class="flex gap-9 justify-center  mt-24 mx-auto relative before:content-[''] before:absolute before:-top-14 before:-left-32 before:-right-32 before:h-36 before:bg-white-points before:bg-cover before:z-10 after:content-[''] after:absolute after:block after:h-80 after:top-20 after:-right-32 after:-left-32 after:bg-green after:z-10 after:rounded-lg;
            ">
                @foreach($posts as $post)
                    <li class="max-w-[320px] bg-white px-4 pt-4 pb-28 shadow-2xl rounded-xl relative z-20">
                        <x-post-card :post="(object) $post" />
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
