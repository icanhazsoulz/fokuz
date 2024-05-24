@php
    $classes = 'relative mt-0 mb-0';

    $cards = [
        "0" => [
            "title" => "Theater machen",
            "image" => "./assets/images/home-page/success/success-card-1.jpg",
            "alt" => "a man and a dog with germany flags"
        ],
        "1" => [
            "title" => "Lebhafte",
            "image" => "./assets/images/home-page/success/success-card-2.jpg",
            "alt" => "running dog with a stick"
        ],
        "2" => [
            "title" => "Erwischt",
            "image" => "./assets/images/home-page/success/success-card-3.jpg",
            "alt" => "black and white rabbit"
        ]
];
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div class="px-0 mx-auto">
        <div
            class="grid grid-cols-2 auto-rows-auto gap-10 relative after:content-[''] after:w-[700px] after:aspect-square after:bg-green-points-square after:bg-no-repeat after:bg-cover after:absolute after:bottom-0 after:left-1/3 after:z-0"
        >
            <div class="pt-20 relative before:content-[''] before:absolute before:-z-10 before:top-0 before:w-full before:bg-yellow before:h-2/3">
                {{--<div class="bg-yellow pt-16 pb-96 px-5 relative h-[640px]">--}}
                    <div class="mb-16 w-fit mx-auto">
                        <x-header>Erflog</x-header>
                        <x-subheader>Beste Momente</x-subheader>
                    </div>
                {{--</div>--}}
                {{--<div
                    class="bg-white rounded-2xl shadow-2xl px-10 py-10 mx-auto wrapper__img w-[537px] absolute bottom-0 left-1/2 -translate-x-[50%]"
                >
                    <h3 class="text-4xl font-text-title mb-3">Theater machen</h3>
                    <img
                        src="./assets/images/home-page/success/success1.jpg"
                        alt="a man and a dog with germany flags"
                        class="w-full"
                    />
                </div>--}}
                <x-card :card="$cards[0]" class="absolute bottom-0 left-1/2 -translate-x-[50%]"/>
            </div>
            <div
                class="success__cell relative z-10 pt-28 pb-14 pl-14 pr-36 flex flex-col"
            >
                <div class="mb-16 max-w-[400px]">
                    Spaziergänge mit dem Schwanz in Parks und auf dem Land. Für
                    sozial Aktive. Für die Modischsten. Für Welpen und zum
                    Wohlfühlen. Werbung. Partys und Sportveranstaltungen
                </div>
                <div class="w-40 ml-auto mb-10">
                    <img
                        class="w-full"
                        src="./assets/images/home-page/success/success2-s1.jpg"
                        alt="little dogs on blue background"
                    />
                </div>
                <div class="w-52 mr-auto">
                    <img
                        class="w-full"
                        src="./assets/images/home-page/success/success2-s2.jpg"
                        alt="a woman with two dogs"
                    />
                </div>
                <div class="wrapper__img wrapper__img-s w-40 mx-auto mt-auto">
                    <img
                        class="w-full"
                        src="./assets/images/home-page/success/success4-s1.jpg"
                        alt="a woman with two dogs"
                    />
                </div>
            </div>
            <div
                class="relative z-10 flex flex-col gap-8 pl-8 pb-44"
            >
                <div class="w-52">
                    <img
                        class="w-full"
                        src="./assets/images/home-page/success/success3-s1.jpg"
                        alt="a woman with two dogs"
                    />
                </div>
                <div class="w-1/3 ml-auto">
                    <img
                        class="w-full"
                        src="./assets/images/home-page/success/success3-s2.jpg"
                        alt="a woman with two dogs"
                    />
                </div>
            </div>
            <div class="relative z-10 flex flex-col gap-20 pb-44">
                <x-card :card="$cards[1]" />
            </div>
            <div class="relative z-10">
                <x-card :card="$cards[2]" class="mb-10"/>
            </div>
            <div
                class="z-10 bg-yellow pr-36 pl-10 flex flex-col gap-8"
            >
                <div
                    class="w-40 ml-auto -translate-y-24"
                >
                    <img
                        class="w-full"
                        src="./assets/images/home-page/success/success6-s1.jpg"
                        alt="a dog with wings on purple background"
                    />
                </div>
                <div class="w-64 mr-auto">
                    <img
                        class="w-full"
                        src="./assets/images/home-page/success/success6-s2.jpg"
                        alt="a dog with rabbit years on blue background"
                    />
                </div>
            </div>
        </div>
    </div>
</section>
