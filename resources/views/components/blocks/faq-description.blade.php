@php
    $classes = 'bg-green relative';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x-container>
        <div class="bg-white rounded-tr-2xl pt-16 px-14 relative  -top-56 before:content-[''] before:w-full before:h-16 before:bg-white before:absolute before:left-0 before-r-0 before:-top-8 before:rounded-tl-2xl before:rounded-tr-2xl">
            <div
                class="bg-green rounded-t-2xl flex flex-row-reverse justify-center gap-14 pt-20 px-8 pb-20 relative"
            >
                <div>
                    <div class="flex flex-row-reverse justify-between items-center gap-20">
                        <x-paragraph class="max-w-[420px]">
                            Du bist hier, das bedeutet, du bereitest dich auf ein
                            erstaunliches Fotoshooting für deinen vierbeinigen Freund
                            vor! Ich habe für dich einen kurzen Leitfaden zu den
                            wichtigsten Punkten vorbereitet, die du wissen solltest.
                            Hier findest du Antworten auf Fragen darüber, wie ich an die
                            Fotografie von Tieren herangehe, welche Momente ich suche
                            und wie du dein Haustier vorbereiten kannst, damit es in
                            voller Pracht strahlt. Lass uns gemeinsam diese Erfahrung
                            unvergesslich für dich und deinen Liebling machen!
                        </x-paragraph>
                        <div
                            class="relative -left-[120px] bg-white py-9 rounded min-w-[400px] h-fit"
                        >
                            <img
                                class="relative left-12 rounded"
                                src="./assets/images/faq-page/faq-hero.jpg"
                                alt="three dogs running on th green grass"
                                class="w-full h-auto object-fill"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-container>
</section>
