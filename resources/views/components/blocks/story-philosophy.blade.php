@php
    $classes = 'relative pb-14 mb-32';

    $ideas = [
        '1' => [
            'svg' => 'aperture',
            'title' => 'Respekt vor der Individualität',
            'text' => 'Der Ansatz, jedes Tier als einzigartige Persönlichkeit zu
                    behandeln, ist der Schlüssel zu einer komfortablen Arbeit beim
                    Shooting. Während des Fotoshootings berücksichtige ich die
                    individuellen Merkmale und Bedürfnisse der Tiere und passe mich
                    jedem von ihnen an.',
            'color' => 'text-primary'
        ],
        '2' => [
            'svg' => 'add',
            'title' => 'Anpassung und Komfort',
            'text' => 'Tiere machen während des Shootings nur das, was ihnen Freude
                    bereitet. Ich beobachte ihr Verhalten und ihre Stimmung
                    aufmerksam und passe den Shooting-Prozess an ihren maximalen
                    Komfort an. Wenn ich Anzeichen von Unruhe oder Stress bemerke,
                    machen wir eine Pause.',
            'color' => 'text-green'
         ],
        '3' => [
            'svg' => 'camera',
            'title' => 'Ruhige und sichere Umgebung',
            'text' => 'Vor Beginn des Fotoshootings schaffe ich eine ruhige Atmosphäre
                    im Studio oder am gewählten Ort. Dies beinhaltet die Minimierung
                    von lauten Geräuschen und plötzlichen Bewegungen, die die Tiere
                    erschrecken könnten.',
            'color' => 'text-red'
        ],
        '4' => [
            'svg' => 'heart',
            'title' => 'Gewohnte Gegenstände',
            'text' => ' Ich ermutige die Besitzer, gewohnte Gegenstände für die Tiere
                    zum Shooting mitzubringen – ihre Lieblingsspielzeuge, Unterlagen
                    oder Schüsseln. Dies hilft den Tieren, sich zu entspannen und
                    sich in der neuen Umgebung sicherer und komfortabler zu fühlen.',
            'color' => 'text-yellow'
        ],
        '5' => [
            'svg' => 'image',
            'title' => 'Geduld und Langsamkeit',
            'text' => 'Die Arbeit mit Tieren erfordert Geduld und die Fähigkeit, den
                    Prozess nicht zu überstürzen. Ich nehme mir Zeit, damit das Tier
                    sich an die neue Umgebung gewöhnen kann, bevor wir mit dem
                    Shooting beginnen. Im Laufe des Shootings nimmt das Warten mehr
                    Zeit in Anspruch als das Shooting selbst, denn beim Arbeiten mit
                    Tieren ist es am wichtigsten, den richtigen Moment einzufangen.',
            'color' => 'text-green'
        ],
         '6' => [
            'svg' => 'happy-smile',
            'title' => 'Sichere Handhabung',
            'text' => 'Die Sicherheit der Tiere während des Shootings hat für mich
                    oberste Priorität. Während des Shootings verwende ich nur
                    sicheres Equipment und Requisiten. Ich stelle immer sicher, dass
                    alle Anwesenden beim Shooting wissen, wie man richtig und sicher
                    mit den Tieren umgeht. Die Teilnahme mehrerer Tiere am Shooting
                    ist nur möglich, wenn sie sich untereinander kennen und nicht
                    feindlich sinnt sind.',
            'color' => 'text-yelow'
        ],
         '7' => [
            'svg' => 'people',
            'title' => 'Feedback vom Besitzer',
            'text' => 'Die Interaktion mit den Tierbesitzern vor und während des
                    Fotoshootings ist unglaublich wichtig. Ich kommuniziere ständig
                    mit den Besitzern, um die Vorlieben ihrer Tiere, ihre
                    Fähigkeiten und Besonderheiten zu verstehen und den
                    Shooting-Prozess entsprechend ihren Wünschen und Empfehlungen
                    anzupassen.',
            'color' => 'text-red'
        ]
    ];
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div
        class="absolute bottom-0 right-0 w-[400px] pb-24 after:content-[''] after:w-64 after:h-24 after:absolute after:left-0 after:bg-green"
    >
        <img src="./assets/images/story-page/philosophy.jpg" alt="" />
    </div>
    <x-container>
        <x-header-small>Die 7 Pfoten meiner Fotophilosophie</x-header-small>
        <ul class="flex gap-9 flex-wrap">
            @foreach($ideas as $idea)
                <li class="w-64">
                    <svg class="w-12 h-12 mb-4 {{ $idea['color'] }}">
                        <use
                            class="transition-all duration-200"
                            href="./assets/icons/icons-sprite.svg#{{ $idea['svg'] }}"
                        ></use>
                    </svg>
                    <h3>{{ $idea['title'] }}</h3>
                    <div>
                        {{ $idea['text'] }}
                    </div>
                </li>
            @endforeach
            {{--<li class="w-64">
                <svg class="w-10 h-10 text-[#782AAC] hover:text-[#8047a6] mb-5">
                    <use
                        class="transition-all duration-200"
                        href="./assets/icons/icons-sprite.svg#aperture"
                    ></use>
                </svg>
                <h3 class="text-2xl mb-8">Respekt vor der Individualität</h3>
                <div>
                    Der Ansatz, jedes Tier als einzigartige Persönlichkeit zu
                    behandeln, ist der Schlüssel zu einer komfortablen Arbeit beim
                    Shooting. Während des Fotoshootings berücksichtige ich die
                    individuellen Merkmale und Bedürfnisse der Tiere und passe mich
                    jedem von ihnen an.
                </div>
            </li>
            <li class="w-64">
                <svg class="w-10 h-10 text-[#71D154] hover:text-[#7de45e]">
                    <use
                        class="transition-all duration-200"
                        href="./assets/icons/icons-sprite.svg#add"
                    ></use>
                </svg>
                <h3>Anpassung und Komfort</h3>
                <div>
                    Tiere machen während des Shootings nur das, was ihnen Freude
                    bereitet. Ich beobachte ihr Verhalten und ihre Stimmung
                    aufmerksam und passe den Shooting-Prozess an ihren maximalen
                    Komfort an. Wenn ich Anzeichen von Unruhe oder Stress bemerke,
                    machen wir eine Pause.
                </div>
            </li>
            <li class="w-64">
                <svg class="w-10 h-10 text-[#F1493C] hover:text-[#c7534a]">
                    <use
                        class="transition-all duration-200"
                        href="./assets/icons/icons-sprite.svg#camera"
                    ></use>
                </svg>
                <h3>Ruhige und sichere Umgebung</h3>
                <div>
                    Vor Beginn des Fotoshootings schaffe ich eine ruhige Atmosphäre
                    im Studio oder am gewählten Ort. Dies beinhaltet die Minimierung
                    von lauten Geräuschen und plötzlichen Bewegungen, die die Tiere
                    erschrecken könnten.
                </div>
            </li>
            <li class="w-64">
                <svg class="w-10 h-10 text-[#FDDE42] hover:text-[#d3ce51]">
                    <use
                        class="transition-all duration-200"
                        href="./assets/icons/icons-sprite.svg#heart"
                    ></use>
                </svg>
                <h3>Gewohnte Gegenstände</h3>
                <div>
                    Ich ermutige die Besitzer, gewohnte Gegenstände für die Tiere
                    zum Shooting mitzubringen – ihre Lieblingsspielzeuge, Unterlagen
                    oder Schüsseln. Dies hilft den Tieren, sich zu entspannen und
                    sich in der neuen Umgebung sicherer und komfortabler zu fühlen.
                </div>
            </li>
            <li class="w-64">
                <svg class="w-10 h-10 text-[#71D154] hover:text-[#7fe361]">
                    <use
                        class="transition-all duration-200"
                        href="./assets/icons/icons-sprite.svg#image"
                    ></use>
                </svg>
                <h3>Geduld und Langsamkeit</h3>
                <div>
                    Die Arbeit mit Tieren erfordert Geduld und die Fähigkeit, den
                    Prozess nicht zu überstürzen. Ich nehme mir Zeit, damit das Tier
                    sich an die neue Umgebung gewöhnen kann, bevor wir mit dem
                    Shooting beginnen. Im Laufe des Shootings nimmt das Warten mehr
                    Zeit in Anspruch als das Shooting selbst, denn beim Arbeiten mit
                    Tieren ist es am wichtigsten, den richtigen Moment einzufangen.
                </div>
            </li>
            <li class="w-64">
                <svg class="w-10 h-10 text-[#FDDE42] hover:text-[#e6d060]">
                    <use
                        class="transition-all duration-200"
                        href="./assets/icons/icons-sprite.svg#happy-smile"
                    ></use>
                </svg>
                <h3>Sichere Handhabung</h3>
                <div>
                    Die Sicherheit der Tiere während des Shootings hat für mich
                    oberste Priorität. Während des Shootings verwende ich nur
                    sicheres Equipment und Requisiten. Ich stelle immer sicher, dass
                    alle Anwesenden beim Shooting wissen, wie man richtig und sicher
                    mit den Tieren umgeht. Die Teilnahme mehrerer Tiere am Shooting
                    ist nur möglich, wenn sie sich untereinander kennen und nicht
                    feindlich sinnt sind.
                </div>
            </li>
            <li class="w-64">
                <svg class="w-10 h-10 text-[#F1493C] hover:text-[#c7534a]">
                    <use
                        class="transition-all duration-200"
                        href="./assets/icons/icons-sprite.svg#people"
                    ></use>
                </svg>
                <h3>Feedback vom Besitzer</h3>
                <div>
                    Die Interaktion mit den Tierbesitzern vor und während des
                    Fotoshootings ist unglaublich wichtig. Ich kommuniziere ständig
                    mit den Besitzern, um die Vorlieben ihrer Tiere, ihre
                    Fähigkeiten und Besonderheiten zu verstehen und den
                    Shooting-Prozess entsprechend ihren Wünschen und Empfehlungen
                    anzupassen.
                </div>
            </li>
            <li class="w-64 h-auto"></li>--}}
        </ul>
    </x-container>
    <div
        class="absolute bottom-0 right-0 w-[400px] pb-24 after:content-[''] after:w-64 after:h-24 after:absolute after:left-0 after:bg-brand-2"
    >
        <img src="./assets/images/story-page/philosophy.jpg" alt="" />
    </div>
</section>
