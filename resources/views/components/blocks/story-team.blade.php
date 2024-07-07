@php
    $classes = 'mb-10';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x-container class="px-0">
        <div class="mb-16 px-5">
            <x-header-medium class="mb-4">
                Mein Team
            </x-header-medium>
            <x-paragraph>
                Harvy gibt mir die Themen vor, in meinem Kopf entstehen Ideen,
                mein Mann hilft, die notwendigen Requisiten vorzubereiten. Wenn
                laut dem Szenario im Bild ein Mensch zusammen mit einem Tier sein
                soll, hilft mir ein Mannequin namens Josephine, Komposition und
                Licht zu bearbeiten. Und Harvy selbst arbeitet im Studio wie ein
                professionelles Model. Zusammen sind wir ein wunderbares Team, das
                ich Ihnen jetzt vorstellen werde.
            </x-paragraph>
        </div>
        <x-points-block
            class="mb-20 before:bg-red-points after:bg-green after:h-[490px]"
        >
            <div class="overflow-hidden rounded">
                <img
                    src="./assets/images/story-page/about-me-team.jpg"
                    alt="a dog sitting behind the table"
                    class="img relative z-20"
                />
            </div>
        </x-points-block>

        <div
            class="rounded-tr-2xl rounded-tl-2xl bg-white max-w-[1160px] pt-16 pb-24 px-24 relative z-10"
        >
            <x-header-medium>Teil des Teams</x-header-medium>
            <x-team-list></x-team-list>
        </div>
    </x-container>
</section>
