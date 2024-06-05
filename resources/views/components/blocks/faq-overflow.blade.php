@php
    $classes = 'pb-28 bg-green relative before:content-[""] before:w-full before:h-72 before:bg-yellow before:absolute before:left-0 before:right-0 before:top-0';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x-container class="px-0">
        <div class="bg-white pt-16 px-14 pb-24 -!top-0 relative before:content-[''] before:w-full before:h-16 before:bg-white before:absolute before:left-0 before:right-0 before:-top-8 before:rounded-t-2xl">
            <div
                class="bg-green rounded-2xl flex flex-row justify-center gap-14 pt-12 px-8 pb-28 relative"
            >
                <div>
                    <div class="mb-16">
                        <x-header class="tracking-tighter">Was tun</x-header>
                        <x-subheader>Häufige Fragen und Antworten</x-subheader>
                    </div>
                    <div class="max-w-[420px]">
                        <x-paragraph>
                            Wenn es um ein Fotoshooting mit Hunden geht, kommen viele Fragen auf. Das ist verständlich – schließlich willst Du wissen, was Deine Fellnase und Dich erwartet. Die wichtigsten Antworten habe ich Dir in meinen Hunde Fotoshooting FAQ zusammengestellt: Hier findest Du viele Informationen rund um die DOGGYFRAMES Hundeshootings. Du möchtest etwas anderes wissen? Dann schreib mir doch einfach. Ich lasse Dich mit Deinen Fragen nicht allein.
                        </x-paragraph>
                    </div>
                </div>
                <div
                    class="relative top-14 -right-[92px] rounded overflow-hidden min-w-[400px] h-fit"
                >
                    <img
                        src="./assets/images/portfolio-page/how-to/how-to.jpg"
                        alt="dogs running on the lane"
                        class="w-full h-auto object-fill"
                    />
                </div>

                <x-link href="#" class="absolute bottom-6 left-12">Mehr sehen</x-link>
            </div>
        </div>
    </x-container>
</section>
