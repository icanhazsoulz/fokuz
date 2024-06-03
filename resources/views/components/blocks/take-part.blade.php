@php
    $classes = 'py-28 relative';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x-container class="px-0">
        <div class="mb-16">
            <x-header class="tracking-tighter">Mittun</x-header>
            <x-subheader>Seelen verbinden</x-subheader>
        </div>

            <div
                class="flex flex-row-reverse justify-[left] gap-14  pb-28 relative"
            >
                <div>

                    <div class="max-w-[420px] px-4">
                        <x-header-small>Jährliche Frühlingsfest</x-header-small>
                        <x-paragraph class="italic">
                            Willkommen zu unserem jährlichen Frühlingsfest!
                        </x-paragraph>
                        <x-paragraph class="italic">
                            <span>Datum: 20.04.24</span>
                            <span>Zeit: 15:00</span>
                            <span>UhrOrt: Johannes Flintrop Str. 68a (Innenhof), 40822 Mettmann</span>
                        </x-paragraph>

                        <x-paragraph>
                            Unabhängig von Größe, Charakter und Alter laden wir alle Hunde zu unserem mystischen Fotoshooting ein! Hier findet jede Pfote eine einzigartige Atmosphäre.
                        </x-paragraph>
                        <x-paragraph>
                            Unser professioneller Fotografin @fokuz.photo , die von einem Modefotografen ausgebildet wurde, macht bereits seit über 5 Jahren eindrucksvolle Bilder mit Tieren. Sie weiß, wie sie die Individualität...
                        </x-paragraph>
                    </div>
                </div>
                <div
                    class="relative rounded overflow-hidden min-w-[400px] h-fit"
                >
                    <img
                        src="./assets/images/portfolio-page/take-part/1.jpg"
                        alt="dogs running on the lane"
                        class="w-full h-auto object-fill"
                    />
                </div>

                <x-link href="#" class="absolute left-1/2 bottom-6">Mehr sehen</x-link>
            </div>
    </x-container>
</section>
