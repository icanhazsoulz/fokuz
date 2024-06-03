<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonials')->insert([
            'image' => 'testimonial2.jpg',
            'author' => 'promama_lera',
//            'date' => '17.10.2023',
            'text' => 'Hallo, danke für unsere Fotos mit Lunochka 😍 Die Aufnahmen sind so lebendig geworden, mir hat alles sehr gefallen, man sieht, dass es Ihnen viel Freude bereitet und man spürt neben Ihrem Professionalismus auch eine große Liebe zu Tieren ☺️ Ich erinnere mich, wie Sie damals noch mit einem Gips am Bein gearbeitet haben, aber das hat Sie nicht davon abgehalten, die schönsten und erfolgreichsten Aufnahmen von Luna und den anderen Hunden zu machen 🙈😍 Ich bewundere Ihren Beruf, Sie machen Hundebesitzer glücklicher 🥰 Ich wünsche Ihnen mehr Ideen und mehr Möglichkeiten zu deren Umsetzung 🙏🏻☺️',
            'handle' => '@promama_lera',
            'url' => 'https://www.instagram.com/promama_lera',
            'featured' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('testimonials')->insert([
            'image' => 'testimonial4.jpg',
            'author' => 'Hundeschule Lapki',
//            'date' => '26.03.2024',
            'text' => 'Ich bin absolut begeistert von der Hundefotografin Julia, die schon seit einiger Zeit die besonderen Momente unserer vierbeinigen Freunde festhält. Ihre Arbeit ist einfach beeindruckend und hat mir persönlich sehr geholfen. Die Fotos, die sie macht, sind mehr als nur Bilder – sie sind echte Kunstwerke, die Persönlichkeit und die einzigartigen Charakterzüge jedes Hundes einfangen.

Besonders während der Gruppenstunden in unserer Hundeschule Lapki in Mettmann beweist sie immer wieder aufs Neue ihr außergewöhnliches Talent und Gespür für den richtigen Moment. Jedes Mal, wenn sie bei uns ist, freue ich mich schon auf die wunderbaren Fotos, die entstehen. Sie hat nicht nur ein gutes Auge für die besonderen Momente, sondern versteht es auch, eine entspannte Atmosphäre zu schaffen, in der sich sowohl Hunde als auch Menschen wohl fühlen.

Auch die Fotoshootings, die sie speziell in meiner Hundeschule durchführt, sind immer ein voller Erfolg. Sie geht individuell auf jeden Hund ein und schafft es, ihre Persönlichkeiten in den Bildern zum Ausdruck zu bringen. Ihre Professionalität, gepaart mit ihrer Leidenschaft für Tiere und Fotografie, macht jede Fotosession zu einem unvergesslichen Erlebnis.

Ich bin sehr dankbar, dass wir die Möglichkeit haben, mit einer so talentierten Fotografin zusammenzuarbeiten. Ihre Fotos sind eine wunderschöne Erinnerung an die besonderen Momente, die wir mit unseren Hunden teilen. Ich kann sie jedem nur wärmstens empfehlen, der auf der Suche nach außergewöhnlichen und ausdrucksstarken Hundefotos ist.',
            'handle' => '@Hundeschule Lapki',
            'url' => 'https://lapki.nrw',
            'featured' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('testimonials')->insert([
            'image' => 'testimonial1.jpg',
            'author' => 'Olesya Poruchnyk',
//            'date' => '18.02.2024',
            'text' => 'Überwältigt von der Hundefotografin Julia: Ihre Bilder sind wahre Kunst, die Seelen meiner zwei Hunde und meines Katers einfangen. Mit Talent, Leidenschaft und einem Auge fürs Detail macht sie jede Session einzigartig. Unvergessliche Erinnerungen, absolut empfehlenswert! ',
            'handle' => '@kinolog.lapki.nrw',
            'url' => 'https://lapki.nrw',
            'featured' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('testimonials')->insert([
            'image' => 'testimonial3.jpg',
            'author' => 'vomhoennetal',
//            'date' => '25.03.24',
            'text' => 'Liebe Julia hat uns heute besucht!  Sie kam zu uns nach Hause und machte Fotos mit meinen Kaninchen.  Zuerst hat sie alle ihre Sachen für das Shooting mitgebracht und dann haben wir alles an seinen Platz gebracht.  Es ist sehr lustig, wie viele interessante Dinge sie dabei hatte.  Unterschiedliche Hintergründe und allerlei Kleinigkeiten.  Wir haben verschiedene Motive ausprobiert, es war toll, die Kaninchen spielten die Hauptrolle und es hat sogar Spaß gemacht. Sehr einfühlsame und nette Fotografin! Wir freuen uns darauf, Julia wiederzusehen!',
            'handle' => '@vomhoennetal',
            'url' => 'https://www.instagram.com/vomhoennetal',
            'featured' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
