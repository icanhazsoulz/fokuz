@php
    $classes = 'mb-28 dark:bg-slate-800 dark:text-white relative before:content-[""] before:absolute before:top-0 before:left-0 before:w-full before:h-1/2 before:bg-yellow pt-20';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div class="container mx-auto">
        <div class="mb-16 relative">
            <x-header>Awards</x-header>
            <x-subheader>das Neueste und Relevanteste</x-subheader>
        </div>
        <div class="success__grid grid grid-cols-2 auto-rows-auto gap-10">
            <div class="success__cell relative">
                <div class="cell mx-auto">
                    <h3 class="cell__title">Dog photographer of the year</h3>
                    <div class="cell__img max-w-[416px] mb-2">
                        <img
                            src="./assets/images/about-page/awards/1.jpg"
                            alt="a man and a dog with germany flags"
                            class="img"
                        />
                    </div>
                    <p class="cell__description">
                        <i>Kategorie „Rescued Dogs“ 2019</i>
                    </p>
                </div>
            </div>
            <div class="success__cell relative">
                <div class="cell mx-auto relative -top-28">
                    <h3 class="cell__title">Dog photographer of the year</h3>
                    <div class="cell__img max-w-[416px] mb-2">
                        <img
                            src="./assets/images/about-page/awards/2.jpg"
                            alt="a man and a dog with germany flags"
                            class="img"
                        />
                    </div>
                    <p class="cell__description">
                        <i>OVERALL WINNER 2019</i>
                    </p>
                </div>
            </div>
            <div class="success__cell relative">
                <div class="cell">
                    <h3 class="cell__title">Pet Photographer of the year 2019 </h3>
                    <div class="cell__img max-w-[416px] mb-2">
                        <img
                            src="./assets/images/about-page/awards/3.jpg"
                            alt="a man and a dog with germany flags"
                            class="img"
                        />
                    </div>
                    <p class="cell__description">
                        <i>Kategorie „Rescued Dogs“ 2019</i>
                    </p>
                </div>
            </div>
            <div>
                <ul class="max-w-[450px] mx-auto list-disc">
                    <li>Dog Photographer of the year 2019 Category Rescued dogs</li>
                    <li>Nikon Female Facets Top 5 2022</li>
                    <li>Honorable Mentions – Intl. Photography Awards 2023</li>
                    <li>
                        Honarable Mentions – Refocus Awards Black and White Contest
                        2023
                    </li>
                    <li>
                        Gold Award – Nature Pets Budapest International Fotoawards
                        2023
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
