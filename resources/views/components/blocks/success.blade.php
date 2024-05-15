@php
    $classes = 'relative mt-20';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div class="container max-w-[1160px] px-0 mx-auto">
        <div
            class="success__grid grid grid-cols-2 auto-rows-auto gap-10 relative after:content-[''] after:w-[500px] after:aspect-square after:bg-success after:absolute after:bottom-0 after:left-1/3 after:z-0"
        >
            <div class="success__cell pb-[350px] relative">
                <div class="bg-yellow pt-16 pb-96 px-5 relative h-[640px]">
                    <div class="mb-16 w-fit mx-auto">
                        <x-header>Erflog</x-header>
                        <x-subheader>Beste Momente</x-subheader>
                    </div>
                </div>
                <div
                    class="wrapper__img wrapper__img-b mx-auto wrapper__img w-[537px] absolute bottom-0 left-1/2 -translate-x-[50%]"
                >
                    <h3 class="wrapper__img-title">Theater machen</h3>
                    <img
                        src="./assets/images/home-page/success/success1.jpg"
                        alt="a man and a dog with germany flags"
                        class="w-full"
                    />
                </div>
            </div>
            <div
                class="success__cell relative z-10 pt-28 pb-14 pl-14 pr-36 flex flex-col"
            >
                <div class="mb-16 max-w-[400px]">
                    Spaziergänge mit dem Schwanz in Parks und auf dem Land. Für
                    sozial Aktive. Für die Modischsten. Für Welpen und zum
                    Wohlfühlen. Werbung. Partys und Sportveranstaltungen
                </div>
                <div class="wrapper__img wrapper__img-s w-40 ml-auto mb-10">
                    <img
                        class="w-full"
                        src="./assets/images/home-page/success/success2-s1.jpg"
                        alt="little dogs on blue background"
                    />
                </div>
                <div class="wrapper__img wrapper__img-s w-52 mr-auto">
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
                class="success__cell relative z-10 flex flex-col gap-8 pl-8 pb-44"
            >
                <div class="wrapper__img wrapper__img-s w-52">
                    <img
                        class="w-full"
                        src="./assets/images/home-page/success/success3-s1.jpg"
                        alt="a woman with two dogs"
                    />
                </div>
                <div class="wrapper__img wrapper__img-s w-64 ml-auto">
                    <img
                        class="w-full"
                        src="./assets/images/home-page/success/success3-s2.jpg"
                        alt="a woman with two dogs"
                    />
                </div>
            </div>
            <div class="success__cell relative z-10 flex flex-col gap-20 pb-44">
                <div
                    class="wrapper__img wrapper__img-b mx-auto w-[537px] relative"
                >
                    <h3 class="wrapper__img-title">Lebhafte</h3>
                    <img
                        src="./assets/images/home-page/success/success4.jpg"
                        alt="a man and a dog with germany flags"
                        class="w-full"
                    />
                </div>
            </div>
            <div class="success__cell relative z-10">
                <div
                    class="wrapper__img wrapper__img-b mr-auto w-[440px] relative -translate-y-40"
                >
                    <h3 class="wrapper__img-title">Erwischt</h3>
                    <img
                        src="./assets/images/home-page/success/success5.jpg"
                        alt="white rabbit with black years"
                        class="w-full"
                    />
                </div>
            </div>
            <div
                class="success__cell relative z-10 bg-brand-4 pr-36 pl-10 flex flex-col gap-8"
            >
                <div
                    class="wrapper__img wrapper__img-s w-40 ml-auto -translate-y-24"
                >
                    <img
                        class="w-full"
                        src="./assets/images/home-page/success/success6-s1.jpg"
                        alt="a dog with wings on purple background"
                    />
                </div>
                <div class="wrapper__img wrapper__img-s w-64 mr-auto">
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
