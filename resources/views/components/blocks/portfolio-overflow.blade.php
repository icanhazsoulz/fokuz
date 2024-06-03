@php
    $classes = 'bg-red text-white relative';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x-container>
        <div class="bg-white rounded-tr-2xl pt-16 px-14 pb-24 relative before:content-[''] before:w-full before:h-16 before:bg-white before:absolute before:left-0 before-r-0 before:-top-8 before:rounded-tl-2xl before:rounded-tr-2xl">
            <div
                class="bg-red rounded-2xl flex flex-row-reverse justify-center gap-14 pt-20 px-8 pb-20 relative"
            >
                <div>
                    <x-header-medium class="text-white"
                        class="max-w-[700px]"
                    >
                        Dein Fellfreund im Rampenlicht: Jeder Moment zählt
                    </x-header-medium>
                    <div class="flex justify-between gap-20">
                        <x-paragraph class="max-w-[420px]">
                            Eure Haustiere sind stets die Stars meiner Aufnahmen, unabhängig davon, wo und wann wir uns treffen. Stilisierte Kreativ- oder Porträtaufnahmen mache ich in meinem Studio in Werdohl. Ich kann aber auch zu euch mit meinem mobilen Fotostudio kommen. Möchtet ihr Fotos eures vierbeinigen Freundes in der Natur?
                        </x-paragraph>
                        <x-paragraph class="max-w-[420px]">
                            Ich besuche gerne euren Lieblingsplatz, um euren Liebling in seiner natürlichen Umgebung zu fotografieren. Seid ihr Teilnehmer oder Organisator eines Events mit Haustieren? Ich bin gerne euer persönlicher Fotojournalist, der die wichtigsten Momente der Veranstaltung einfängt.
                        </x-paragraph>
                    </div>
                </div>
            </div>
        </div>
    </x-container>
</section>
