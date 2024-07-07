@php
    $classes = 'w-screen pt-24 relative before:content-[""] before:absolute before:top-56 before:left-0 before:w-[36%] before:aspect-square before:bg-yellow-points-square before:bg-cover';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x-container class="px-0">
        <x-header class="tracking-tighter">
            <span>Tierheimhilfe</span>
            <x-page-link />
        </x-header>

        {{-- <x-subheader>Offenherzig, innig, großzügig</x-subheader> --}}
        <div class="flex flex-row-reverse justify-center gap-14 pt-10 px-8 pb-12">
            <div class="relative">
                <div class="max-w-[436px] mb-10">
                    <x-paragraph>Ich finde es wichtig, mein Herz und meine Fähigkeiten für
                        einen guten Zweck einzusetzen. Deshalb verbringe ich auch Zeit
                        als Freiwilliger in Tierheimen – fotografiere die Schützlinge,
                        spiele mit den Katzen, gehe mit den Hunden spazieren und
                        reinige die Käfige.
                    </x-paragraph>
                    <x-paragraph>Einen Teil der Einnahmen spende ich ebenfalls an die
                        Tierheime. Meine Kunden entscheiden selbst, welchem Tierheim
                        das Geld zugutekommt. Gemeinsam leisten wir einen Beitrag zur
                        Unterstützung bedürftiger Tiere.
                    </x-paragraph>
                </div>
                <x-link href="#">Mehr sehen</x-link>
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
    </x-container>
</section>
