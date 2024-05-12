<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('prices')->insert([
            'title' => 'Studio-Shooting in Werdohl',
            'subtitle' => 'Werde zum Superstar in meinem Fotostudio!',
            'text' => 'Tauche ein in eine Welt voller Farben und Magie, wo dein vierbeiniger Freund das Rampenlicht erobert. Mein Studio wartet mit allem, was das Herz begehrt, um jeden Schnappschuss zu etwas Besonderem zu machen.',
            'price' => 95,
//            'conditions' => '',
            'image' => 'meine-studio.png',
        ]);

        \DB::table('prices')->insert([
            'title' => 'Mobiles Studio',
            'subtitle' => 'Deine eigenen vier Wände als kreative Kulisse',
            'text' => 'Kein Weg ist mir zu weit, um deinen pelzigen Gefährten ins beste Licht zu rücken. Meine mobile Ausrüstung bringt die Magie des Studios direkt zu dir nach Hause – für unvergessliche Bilder voller Liebe und Freude.',
            'price' => 115,
//            'conditions' => '',
            'image' => 'studio.png',
        ]);

        \DB::table('prices')->insert([
            'title' => 'Momente',
            'subtitle' => 'Lebendige Erinnerungen, wo immer du bist',
            'text' => 'Natürliche Momente, unvergesslich festgehalten Ob im grünen Gras oder während des Lieblingsspiels – ich fange die Essenz deines Tieres in seiner gewohnten Umgebung ein. Authentisch und lebendig.',
            'price' => 115,
//            'conditions' => '',
            'image' => 'momente.png',
        ]);

        \DB::table('prices')->insert([
            'title' => 'Reportage',
            'subtitle' => 'Dein Event im Fokus',
            'text' => 'Als stille Beobachterin halte ich die Highlights und die unbezahlbaren kleinen Momente deines besonderen Anlasses fest. Dein Event wird durch meine Linse lebendig und bleibt für immer in Erinnerung.',
            'price' => 110,
            'fixed' => 0,
//            'conditions' => '',
            'image' => 'reportage.png',
        ]);
    }
}
