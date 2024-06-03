@php
    $classes = 'flex gap-9 justify-center max-w-[1040px] mx-auto relative';
    $members = [
        '1' => [
            'image' => '/story-page/team-list/iuliia.jpg',
            'alt' => 'Iuliia',
            'descriptions' => [
                'Ich' =>'Iuliia',
                'Nähen oder Klempern' => 'Nähen',
                'Eiskunstlauf oder Boxen' => 'Eiskunstlauf',
                'Reisen oder Disco' => 'Reisen',
                'Zur Erholung...' => '...am Kamin liegen',
                'Als Fotografin…' => 'Ungestüm Hartnäckig Träumerisch'
            ],
            'bg' => 'bg-red',
            'color' => 'text-white'
        ],
        '2' => [
            'image' => '/story-page/team-list/aleks.jpg',
            'alt' => 'Aleks',
            'descriptions' => [
                'Universalopfer' => 'Aleks',
                'Angeln oder Garten' => 'Angeln',
                'Basteln oder Malen' => 'Basteln',
                'Reisen Schlafen?' => 'Reisen',
                'Feierabend zu genießen…' => '...am Kamin liegen',
                'Als Opfer.' => 'Ernst Freundlich Hilfsbereit'
            ],
            'bg' => 'bg-primary',
            'color' => 'text-white'
        ],
        '3' => [
            'image' => '/story-page/team-list/harvy.jpg',
            'alt' => 'Harvy',
            'descriptions' => [
                'Universalmodel' => 'Harvy',
                'Bälle jagen oder blubbern' => 'Bälle jagen oder blubbern',
                'Graben oder Roden' => 'Graben and Roden',
                'Reisen oder Unter dem Tisch schlafen' => 'Reisen und Unter dem Tisch schlafen',
                'Zu Träumen...' => '...am Kamin liegen',
                'Als Model...' => 'Spielerisch Wissbegierig Hartnäckig'
            ],
            'bg' => 'bg-yellow',
            'color' => ''
        ],
        '4' => [
            'image' => '/story-page/team-list/josefina.jpg',
            'alt' => 'Josefina',
            'descriptions' => [
                'Universalpuppe' => 'Josefina',
                'Schweigen oder Singen' => 'Schweigen',
                'Posen oder Joggen' => 'Posen',
                'Reisen oder Zu Hause bleiben' => 'Zu Hause bleiben',
                'Statt am Kamin liegen...' => '...am Fenster stehen',
                'Als Puppe…' => 'Schweigsam Aufmerksam Pflichtbewusst'
            ],
            'bg' => 'bg-green',
            'color' => ''
        ],
    ];
@endphp

<ul {{ $attributes->merge(['class' => $classes]) }}>
    @foreach($members as $member)
        <li class="w-[320px] rounded-xl relative z-10 text-font-color-2">
            <div class="px-5 pt-5 rounded-tl rounded-tr {{ $member['bg'] }}">
                <img
                    class="w-full rounded-lg"
                    src="./assets/images/{{ $member['image'] }}"
                    alt="{{ $member['alt'] }}"
                />
            </div>
            <ul>
                @foreach($member['descriptions'] as $term => $description)
                    <x-list-item class="{{ $member['bg'] }} {{ $member['color'] }}">
                        <p>{{ $term }}</p>
                        <p class="font-semibold">{{ $description }}</p>
                    </x-list-item>
                @endforeach
            </ul>
    </li>
    @endforeach
</ul>
