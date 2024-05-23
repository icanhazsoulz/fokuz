@php
    $classes = 'bg-yellow relative';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div class="container max-w-[1160px] px-0 mx-auto">
        <div class="bg-white rounded-tr-2xl pt-16 px-14 pb-24 relative before:content-[''] before:w-full before:h-16 before:bg-white before:absolute before:left-0 before-r-0 before:-top-8 before:rounded-tl-2xl before:rounded-tr-2xl">
            <div
                class="bg-yellow rounded-2xl flex flex-row-reverse justify-center gap-14 pt-20 px-8 pb-28 relative"
            >
                <div>
                    <h2
                        class="max-w-[700px] color-primary-focused  font-serif mb-20 text-4xl"
                    >
                        Hallo! Ich bin Iuliia, kreative Tierfotografin und
                        Hundefachfrau aus NRW, aus Werdohl.
                    </h2>
                    <div class="flex justify-between gap-20">
                        <p class="max-w-[420px]">
                            Seit über zehn Jahren lebe ich in Deutschland und
                            fotografiere seit 2018 Tiere. Mein Leben in der Welt der
                            Fotografie dauert bereits fast vierzig Jahre an. Es begann
                            in meiner fernen sowjetischen Kindheit mit einer Filmkamera,
                            Schwarz-Weiß-Film und Stunden, die ich in einem dunklen Raum
                            mit einer roten Lampe verbrachte.
                        </p>
                        <p class="max-w-[420px]">
                            Mein Wunsch, die Schönheit um mich herum so vielen Menschen
                            wie möglich zu zeigen, führte mich durch verschiedene Genres
                            der Fotografie - Landschaften, Sport, Porträts,
                            Veranstaltungen, wilde Natur... Ich war sogar Reporterin und
                            erzählte durch meine Fotos von Ereignissen. Bis ich
                            schließlich erkannte, dass die besten Modelle für mich Tiere
                            sind. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
