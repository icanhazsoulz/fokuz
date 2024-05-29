@php
    $classes = 'relative mb-28';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div class="container max-w-[1160px] mx-auto">
        <h2
            class="mb-16 color-primary-focused  font-serif text-4xl"
        >
            Ein Leben voller Pfoten: Die Geschichte meiner tierischen Familie
        </h2>
        <div class="grid grid-cols-2 grid-flow-row gap-16">
            <div class="ml-auto">
                <img class="mx-auto block" src="./assets/images/story-page/family/1.jpg" alt="" />
            </div>
            <div>
                <p class="mb-12">
                    Tiere waren seit meiner Kindheit meine Begleiter. Meine Eltern
                    waren Reitlehrer, und meine Mutter war auch Hundetrainerin. Ich
                    wuchs in einem Haus auf, in dem Hunde, Katzen, Schildkröten,
                    Meerschweinchen und andere Haustiere als Familienmitglieder
                    angesehen wurden.
                </p>
                <p>
                    Meine ersten lebhaften Erinnerungen sind mit einem Schäferhund
                    namens Grey verbunden. Er kam in unsere Familie, bevor ich
                    geboren wurde, und wurde meine erste Babysitterin. Als Schülerin
                    kümmerte ich mich zusammen mit meiner Familie um ausgesetzte
                    Tiere in unserem Heimtierheim. Einer seiner Bewohner, ein
                    Schäferhund namens Irbis, wurde mein erster persönlicher Hund.
                    Das Leben mit Tieren lehrte mich Verantwortung, selbstlose
                    Fürsorge und das Verständnis für ihren einzigartigen Charakter
                    und die Bedürfnisse jedes Einzelnen.
                </p>
            </div>
            <div
                class="relative pl-96 before:content-[''] before:block before:w-64 before:h-[470px] before:bg-yellow before:absolute before:top-12 before:left-0 after:content-[''] after:block after:absolute after:w-36 after:h-60 after:bg-[#EDDEBA] after:top-0 after:left-36"
            >
                <img class="mt-12"
                    class="block"
                    src="./assets/images/story-page/family/2.jpg"
                    alt=""
                />
            </div>
            <div class="mr-0 ml-auto mb-12">
                <img src="./assets/images/story-page/family/3.jpg" alt="" />
            </div>
            <div class="relative col-span-2">
                <div class="bg-green p-11 mt-24 mx-14 rounded-3xl italic">
                    <p class="max-w-xl">
                        Ich wuchs heran, vieles änderte sich in meinem Leben. Aber
                        Tiere waren immer noch bei mir. Am Tag meiner Hochzeit
                        schenkte mir meine Mutter einen Schäferhundwelpen namens Kora,
                        und die Liebe zu Tieren und Schäferhunden wurde bereits zur
                        Tradition meiner eigenen Familie. Kora war unser
                        Erstgeborenes, sie lehrte uns, die richtigen Entscheidungen
                        für uns drei zu finden. Mit ihr machten wir unsere ersten
                        Schritte in Reisen mit einem Hund.
                    </p>
                </div>
                <div class="absolute bottom-20 right-0">
                    <img src="./assets/images/story-page/family/4.jpg" alt="" />
                </div>
            </div>
            <div>
                <img class="ml-auto" src="./assets/images/story-page/family/5.jpg" alt="" />
            </div>
            <div class="my-auto">
                <p>
                    Nach Kora hatten wir Metrix - einen geborenen Reisenden, der
                    buchstäblich auf Rädern aufwuchs, und zwar in einem sowjetischen
                    Jeep Niva. Mit ihm zogen wir von Russland nach Deutschland um,
                    und er hatte das Glück, mehrere Länder zu besuchen und
                    ausländische Kollegen kennenzulernen. Metrix kann ich als mein
                    erstes vierbeiniges Model bezeichnen. Und auch als meinen ersten
                    Lehrer der Tierfotografie. Er war geduldig und wusste, wie man
                    die richtige Pose selbst wählt. Ich musste nur auf den richtigen
                    Moment warten und die Kameraeinstellungen schnell ändern.
                </p>
            </div>

            <div class="ml-auto">
                <img src="./assets/images/story-page/family/6.jpg" alt="" />
            </div>

            <div
                class="relative pb-60 ml-auto -mt-12 before:content-[''] before:block before:w-72 before:h-36 before:bg-yellow before:absolute before:bottom-0 before:right-0 after:content-[''] after:block after:absolute after:w-96 after:h-24 after:bg-[#EDDEBA] after:bottom-20 after:-left-12"
            >
                <img src="./assets/images/story-page/family/7.jpg" alt="" />
            </div>
            <div>
                <img src="./assets/images/story-page/family/8.jpg" alt="" />
            </div>
            <div class="my-auto">
                <p>
                    Heute ist unser pelziges Familienmitglied der Schäferhund
                    Harvey. Trotz seines achtjährigen Alters ist er im Herzen ein
                    ungestümer Welpe, der immer in Bewegung ist und uns dazu bringt,
                    uns zu bewegen. Und natürlich ist er auch ein Reisender - er hat
                    mehr als ein Dutzend Länder besucht und verschiedene
                    Transportmittel ausprobiert, vom Boot bis zum Wohnmobil.
                </p>
            </div>
            <div class="relative col-span-2 pt-24">
                <div class="bg-green p-11 rounded-3xl mx-14">
                    <p class="max-w-md italic">
                        Und genau Harvey hat mich eines Tages dazu inspiriert, im
                        Studio zu fotografieren, und dann von gewöhnlichen Porträts zu
                        kreativen überzugehen.
                    </p>
                </div>
                <div class="pl-14 absolute right-24 bottom-16">
                    <button
                        class="absolute top-0 left-0 w-14 h-24 bg-brand-2 text-white group hover:bg-white"
                    >
                        <svg
                            class="text-white w-11 h-5 rotate-90 transition-all duration-300 origin-center group-hover:text-brand-2"
                        >
                            <use
                                class="w-full"
                                href="./assets/icons/icons-sprite.svg#drop-down"
                            ></use>
                        </svg>
                    </button>
                    <div class="max-w-[360px]">
                        <img
                            src="./assets/images/story-page/family/9.jpg"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
