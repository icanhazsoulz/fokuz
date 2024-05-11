<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('events')->insert([
            'title' => 'HUNDEFOTOSHOOTING „CITY DOGS“',
            'subtitle' => 'Sonntag 25. Februar oder 31. März',
            'text' => 'ZEITLOS.KLASSISCH.ELEGANT. Eine Stadt – tausende Möglichkeiten um Hunde toll ins Szene zu setzen. Die Altstadt Graz bietet zahlreiche Motive um unsere Fellnasen mal von einer ganz anderer Seite zu zeigen. Gemeinsam spazieren wir durch die Grazer Altstadt und ich lichte deine Fellnase an den unterschiedlichen Plätzen ab. Voraussetzung: dein Hund ist verträglich mit anderen Hunden und fühlt sich auch im städtischen Umfeld wohl.',
            'image' => 'event1.png',
        ]);

        \DB::table('events')->insert([
            'title' => 'HUNDEFOTOSHOOTING „ROSA FARBENMEER“',
            'subtitle' => 'Mitte März (geplant wäre 15. – 17. März) Nähe St. Michael in der Steiermark',
            'text' => 'FARBENFROH.EINZIGARTIG. Einmal im Jahr hüllt sich ein sonst eher unscheinbarer Berg in eine Meer aus pinken Blüten und bietet für Hunde die optimale Kulisse um verträumte farbenfrohe Portraits zu erstellen.',
            'image' => 'event2.png'
        ]);

        \DB::table('events')->insert([
            'title' => 'MAGISCHE MOMENTE AM KRIMMLER WASSERFALL',
            'subtitle' => 'Vorraussichtlich 30. August – 1. September',
            'text' => 'Taucht mit mir gemeinsam ein in die faszinierende Welt der Krimmler Wasserfälle und lasst uns gemeinsam unvergessliche Momente deiner Fellnase festhalten. Es sind nur begrenzte Plätze verfügbar. Sicher dir deinen Termin schon jetzt für dieses ein einzigartiges Hundefotoshooting. Voraussetzung: dein Hund hat keine Angst vor Wasser',
            'image' => 'event3.png'
        ]);

        \DB::table('events')->insert([
            'title' => 'HUNDEFOTOSHOOTING „CITY DOGS“',
            'subtitle' => 'Sonntag 25. Februar oder 31. März ',
            'text' => 'ZEITLOS.KLASSISCH.ELEGANT. Eine Stadt – tausende Möglichkeiten um Hunde toll ins Szene zu setzen. Die Altstadt Graz bietet zahlreiche Motive um unsere Fellnasen mal von einer ganz anderer Seite zu zeigen. Gemeinsam spazieren wir durch die Grazer Altstadt und ich lichte deine Fellnase an den unterschiedlichen Plätzen ab. Voraussetzung: dein Hund ist verträglich mit anderen Hunden und fühlt sich auch im städtischen Umfeld wohl. ',
            'image' => 'event4.png'
        ]);
    }
}
