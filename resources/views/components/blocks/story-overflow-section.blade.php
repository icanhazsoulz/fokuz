@php
    $classes = 'relative before:content-[""] before:w-full before:h-[500px] before:bg-red before:absolute before:left-0 before-r-0 before:top-0';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div class="container max-w-[1160px] px-0 mx-auto">
        <div class="bg-white rounded-tr-2xl pt-10 px-14 pb-24 relative before:content-[''] before:w-full before:h-16 before:bg-white before:absolute before:left-0 before-r-0 before:-top-8 before:rounded-tl-2xl before:rounded-tr-2xl">
            <div>
                    <div class="grid  grid-cols-2 gap-x-20 gap-y-10">
                        <img src="./assets/images/story-page/about-hero.jpg" alt="Iuliia Kuznetcova" class="max-w-400px row-span-2 row-start-1"/>
                        <h2
                            class="max-w-[420px] color-primary-focused  font-serif text-4xl  row-start-1 col-start-2"
                        >
                            Hallo! Ich bin Iuliia, kreative Tierfotografin und
                            Hundefachfrau aus NRW, aus Werdohl.
                        </h2>
                        <x-paragraph class="max-w-[420px] row-start-2 col-start-2">
                            Seit über zehn Jahren lebe ich in Deutschland und
                            fotografiere seit 2018 Tiere. Mein Leben in der Welt der
                            Fotografie dauert bereits fast vierzig Jahre an. Es begann
                            in meiner fernen sowjetischen Kindheit mit einer Filmkamera,
                            Schwarz-Weiß-Film und Stunden, die ich in einem dunklen Raum
                            mit einer roten Lampe verbrachte.
                        </x-paragraph>
                        <x-paragraph class="row-start-3 col-span-2">
                            Mein Wunsch, die Schönheit um mich herum so vielen Menschen
                            wie möglich zu zeigen, führte mich durch verschiedene Genres
                            der Fotografie - Landschaften, Sport, Porträts,
                            Veranstaltungen, wilde Natur... Ich war sogar Reporterin und
                            erzählte durch meine Fotos von Ereignissen. Bis ich
                            schließlich erkannte, dass die besten Modelle für mich Tiere
                            sind. 
                        </x-paragraph>
                    </div>
            </div>
        </div>
    </div>
</section>
