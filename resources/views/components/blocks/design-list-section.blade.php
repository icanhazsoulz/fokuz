@php
    $classes = 'mb-28 bg-red pb-28 relative';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div
            class="container bg-white mx-auto rounded-bl-2xl rounded-br-2xl relative -top-8 px-14 max-w-[1160px] h-[760px]"
        >
            <div class="max-w-[1040px] mx-auto mb-16">
                <x-section-title class="">
                    Was kostet
                </x-section-title>
                <div class="mb-28">ich liebe meine Arbeit</div>
            </div>
            <!-- <div
              class="absolute top-44 border -right-16 -left-16 h-36 bg-shooting1 bg-cover z-0"
            ></div> -->
            <ul class="flex gap-9 justify-center max-w-[1040px] mt-24 mx-auto relative before:content-[''] before:absolute before:-top-14 before:-left-32 before:-right-32 before:h-36 before:bg-cover before:z-0 after:content-[''] after:absolute after:block after:h-80 after:top-20 after:-right-32 after:-left-32 after:h-80 after:bg-brand-4 after:z-0 after:rounded;
   before:bg-shootingList">
                <li class="w-[320px] bg-white px-4 pt-4 pb-20 shadow-2xl rounded-xl relative z-10">
                    <div class="mb-6 aspect-[3/2]">
                        <img
                            src="./assets/images/home-page/about/shooting-list/studio.jpg"
                            alt="studio"
                            class="w-full object-cover"
                        />
                    </div>
                    <div class="shooting__text mb-16">
                        <h3 class="font-text-title mb-6 h-20 text-4xl">Studio</h3>
                        <div>
                            Mein Fotostudio ist wie ein zauberhaftes Theater, in dem
                            jeder seine Rolle spielen kann! Ihre geliebten Tiere sind
                            die Hauptdarsteller, Sie sind die begeisterten Zuschauer,
                            oder vielleicht ist Ihnen eine Nebenrolle zugedacht. Und ich
                            bin der Regisseur dieses Theaters. Es spielt keine Rolle,
                            wer von uns die Handlung entworfen hat, welche Rollen wir
                            spielen oder welches Requisit auf der Bühne steht, denn jede
                            unserer Aufführungen verdient es, für immer in Erinnerung zu
                            bleiben.
                        </div>
                    </div>
                    <a href="price.html#studio" class="see-more-btn bottom-4 left-4"
                    >Mehr sehen</a
                    >
                </li>
                <li class="w-[320px] bg-white px-4 pt-4 pb-20 shadow-2xl rounded-xl relative z-10">
                    <div class="mb-6 aspect-[3/2]">
                        <img
                            src="./assets/images/home-page/about/shooting-list/momente.jpg"
                            alt="momente"
                            class="w-full object-cover"
                        />
                    </div>
                    <div class="shooting__text mb-6">
                        <h3 class="font-text-title mb-6 h-20 text-4xl">Momente</h3>
                        <div>
                            Jeder Moment im Tierleben birgt eine einzigartige
                            Geschichte. Ich fotografiere eure Tiere dort, wo sie ganz
                            sie selbst sind – in ihrer natürlichen Umgebung. Mit einem
                            feinen Gespür für den richtigen Moment und einem Auge für
                            das Detail, fange ich die Einzigartigkeit und die
                            Persönlichkeit jedes Tieres ein. Ob überraschendes Spiel im
                            Garten oder ausgelassene Freude beim Spaziergang, ich bin
                            bereit, eure Geschichten überallhin zu folgen.
                        </div>
                    </div>
                    <a
                        href="price.html#momente"
                        class="see-more-btn bottom-4 left-4"
                    >Mehr sehen</a
                    >
                </li>
                <li class="w-[320px] bg-white px-4 pt-4 pb-20 shadow-2xl rounded-xl relative z-10">
                    <div class="mb-6 aspect-[3/2]">
                        <img
                            src="./assets/images/home-page/about/shooting-list/reportage.jpg"
                            alt="reportage"
                            class="w-full object-cover"
                        />
                    </div>
                    <div class="shooting__text mb-6">
                        <h3 class="font-text-title mb-6 h-20 text-4xl">Reportage</h3>
                        <div>
                            Jedes Event ist voll einzigartiger Momente – von Aufregung
                            bis zu Überraschungen. Meine Mission ist es sondern die
                            Geschichte Ihres Events zu erzählen - die Atmosphäre, die
                            Emotionen und die vielen kleinen Details einzufangen, die
                            zusammenkommen, um Ihre Veranstaltung unvergesslich zu
                            machen. Mit einem aufmerksamen Blick für die besonderen
                            Interaktionen zwischen Tieren und Menschen schaffe ich eine
                            lebendige, emotionale Erzählung Ihres besonderen Tages.
                        </div>
                    </div>
                    <a
                        href="price.html#reportage"
                        class="see-more-btn bottom-4 left-4"
                    >Mehr sehen</a
                    >
                </li>
            </ul>
        </div>
</section>

