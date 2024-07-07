@php
    $classes = 'pt-32 pb-20 relative mb-0 relative after:content-[""] after:block after:w-full after:h-[215px] after:absolute after:bottom-0 after:left-0 after:bg-white';
@endphp


<section {{ $attributes->merge(['class' => $classes]) }}
>
    <x-widgets.call class="bottom-[400px]"></x-widgets.call>
    <x-container class="z-10">
        <livewire:socials-widget class="bottom-48"></livewire:socials-widget>

        <div class="mb-20">
            <x-header class="text-white tracking-tighter mb-4">Ich über mich</x-header>
            <x-subheader class="text-white mb-28">ich liebe meine Arbeit</x-subheader>
        </div>
        <div class="bg-white rounded-tr-2xl rounded-tl-2xl pt-20 px-14 relative">
            <div>
                <div class="grid  grid-cols-2 gap-x-20 gap-y-10">
                    <img src="./assets/images/story-page/about-hero.jpg" alt="Julia  Kuznetcova" class="max-w-400px row-span-2 row-start-1"/>
                    <x-header-medium
                        class="max-w-[420px]  row-start-1 col-start-2"
                    >
                        Hallo! Ich bin Julia , kreative Tierfotografin und
                        Hundefachfrau aus NRW, aus Werdohl.
                    </x-header-medium>
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

    </x-container>

</section>
