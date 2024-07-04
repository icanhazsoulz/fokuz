@php
    $classes = 'py-28 relative';

     $items = [
        '1' => [
            'image' => 'portfolio-page/take-part/1.jpg',
            'title' => 'Jährliche Frühlingsfest',
            'subtitle' => 'Willkommen zu unserem jährlichen Frühlingsfest!',
            'date' => '20.04.24',
            'time' => '15:00',
            'location' => 'Johannes Flintrop Str. 68a (Innenhof), 40822 Mettmann',
            'text' => [
                '1' => 'Unabhängig von Größe, Charakter und Alter laden wir alle Hunde zu unserem mystischen Fotoshooting ein! Hier findet jede Pfote eine einzigartige Atmosphäre.',
                '2' => 'Unser professioneller Fotografin @fokuz.photo , die von einem Modefotografen ausgebildet wurde, macht bereits seit über 5 Jahren eindrucksvolle Bilder mit Tieren. Sie weiß, wie sie die Individualität...'
               ]
           ]
        ];
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x-container class="px-0 relative">
        <div class="mb-16">
            <x-header class="tracking-tighter">
                <span>Mittun</span>
                <x-page-link />
            </x-header>
            {{-- <x-subheader>Seelen verbinden</x-subheader> --}}
        </div>
        @foreach($items as $item)
            <x-text-card :item="$item" />
        @endforeach

        {{--<div
                class="w-fit flex flex-row-reverse justify-[left] gap-14 relative"
            >
                <div class="pb-44 relative">

                    <div class="max-w-[520px] px-4">
                        <x-header-small>Jährliche Frühlingsfest</x-header-small>
                        <x-paragraph class="italic">
                            Willkommen zu unserem jährlichen Frühlingsfest!
                        </x-paragraph>
                        <x-paragraph class="italic">
                            <span class="block">Datum: 20.04.24</span>
                            <span class="block">Zeit: 15:00</span>
                            <span class="block">UhrOrt: Johannes Flintrop Str. 68a (Innenhof), 40822 Mettmann</span>
                        </x-paragraph>

                        <x-paragraph>
                            Unabhängig von Größe, Charakter und Alter laden wir alle Hunde zu unserem mystischen Fotoshooting ein! Hier findet jede Pfote eine einzigartige Atmosphäre.
                        </x-paragraph>
                        <x-paragraph>
                            Unser professioneller Fotografin @fokuz.photo , die von einem Modefotografen ausgebildet wurde, macht bereits seit über 5 Jahren eindrucksvolle Bilder mit Tieren. Sie weiß, wie sie die Individualität...
                        </x-paragraph>
                    </div>
                    <x-link href="#" class="absolute left-4 bottom-6">Mehr sehen</x-link>
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
            </div>--}}
        <x-slider-navigation class="text-primary-focused left-0 bottom-0"></x-slider-navigation>
    </x-container>
</section>
