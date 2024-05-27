@php
    $classes = 'w-screen pt-24';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div class="container max-w-[1160px] px-0 mx-auto">
        <x-header class="tracking-tighter">Tierheimhilfe</x-header>
        <x-subheader>Offenherzig, innig, grobzugig</x-subheader>
        <div class="flex flex-row-reverse justify-center gap-14 pt-10 px-8 pb-12">
            <div class="relative">
                <div class="max-w-[450px] mb-10">
                    <p class="mt-6">Gute Fotos und Videos verwandeln einen Bewohner eines Tierheims tatsächlich von einem „unsichtbaren“ in einen vielversprechenden „heiratsfähigen“ Kandidaten</p>
                    <p class="mt-6">Schließlich beginnt mit Fotos die Bekanntschaft mit dem zukünftigen Besitzer und oft die Liebe vom ersten Bild an.</p>
                </div>
                <x-widgets.see-more-btn />
            </div>
           <div
               class="rounded overflow-hidden min-w-[400px] h-fit self-end relative -left-8"
           >
               <img
                   src="./assets/images/home-page/help/help.jpg"
                   alt="Da bin ich"
                   class="w-full h-auto object-fill"
               />
           </div>
        </div>
    </div>
</section>
