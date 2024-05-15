@php
    $classes = "bg-white rounded-tr-2xl pt-16 px-14 pb-24 relative ";
@endphp

            <div {{ $attributes->merge(['class' => $classes]) }}>
                <div
                    class="bg-red text-white rounded-2xl flex flex-row-reverse justify-center gap-14 pt-12 px-8 pb-28 relative"
                >
                    <div>
                        <div class="mb-16">
                            <x-header class="text-white tracking-tighter">Da bin ich</x-header>
                            <x-subheader class="text-white">ich liebe meine Arbeit</x-subheader>
                        </div>
                        <div class="max-w-[420px]">
                            <p>
                                Willkommen in der Welt, in der Ihr Liebling zum Star wird!
                                Ich bin Julia - eine Fotografin und Hundefachfrau mit
                                Erfahrung in der Erstellung fröhlicher und bunter
                                Fotoshootings mit Ihren Haustieren. In meiner Arbeit ist
                                das Wichtigste für mich das Wohlbefinden und die Freude
                                Ihrer Lieblinge. Ich freue mich darauf, Sie in meinem
                                Fotostudio in Werdohl oder kann zu Ihnen an jeden Ort in
                                Nordrhein-Westfalen kommen und meine magischen Werkzeuge
                                mitbringen.
                            </p>
                            <p class="text__p">
                                Lassen Sie Ihre Lieblinge eine Rolle in einem bunten
                                Spektakel spielen! Und ich werde Ihnen helfen, begeisterte
                                Zuschauer zu werden.
                            </p>
                        </div>
                    </div>
                    <div
                        class="relative -top-20 rounded overflow-hidden min-w-[400px] h-fit"
                    >
                        <img
                            src="./assets/images/home-page/about/about.jpg"
                            alt="Da bin ich"
                            class="w-full h-auto object-fill"
                        />
                    </div>

                    <x-widgets.see-more-btn />
                </div>
            </div>

