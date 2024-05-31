@php
    $classes = 'mb-28';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div class="container mx-auto max-w-[1160px] px-0">
        <div class="mb-16 px-5">
            <x-header-small class="mb-4">
                Mein Team
            </x-header-small>
            <x-paragraph>
                Harvey gibt mir die Themen vor, in meinem Kopf entstehen Ideen,
                mein Mann hilft, die notwendigen Requisiten vorzubereiten. Wenn
                laut dem Szenario im Bild ein Mensch zusammen mit einem Tier sein
                soll, hilft mir ein Mannequin namens Josephine, Komposition und
                Licht zu bearbeiten. Und Harvey selbst arbeitet im Studio wie ein
                professionelles Model. Zusammen sind wir ein wunderbares Team, das
                ich Ihnen jetzt vorstellen werde.
            </x-paragraph>
        </div>
        <x-points-block
            class="before:bg-red-points  after:bg-green"
        >
            <div class="overflow-hidden rounded">
                <img
                    src="./assets/images/story-page/about-me-team.jpg"
                    alt="a dog sitting behind the table"
                    class="img relative z-20"
                />
            </div>
        </x-points-block>
    </div>
</section>
