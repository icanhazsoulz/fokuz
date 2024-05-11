<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert([
            'slug' => 'home',
            'title' => 'Home',
            'gallery_id' => 1,
        ]);

        DB::table('pages')->insert([
            'slug' => 'about',
            'title' => 'Da bin ich',
            'subtitle' => 'Ich verwandle Ihre Tiere in echte Superstars!',
            'gallery_id' => 2,
        ]);

        DB::table('pages')->insert([
            'slug' => 'story',
            'title' => 'Ich über mich',
            'subtitle' => 'Ich liebe meine Arbeit',
        ]);

        DB::table('pages')->insert([
            'slug' => 'testimonials',
            'title' => 'Man über mich',
            'subtitle' => 'Ich liebe meine Arbeit',
        ]);

        DB::table('pages')->insert([
            'slug' => 'partners',
            'title' => 'Partner',
            'subtitle' => 'Ich liebe meine Arbeit',
        ]);

        DB::table('pages')->insert([
            'slug' => 'photoshooting',
            'title' => 'Kann sein',
            'subtitle' => 'Bilderwelten: Lebendig, Echt, Einzigartig',
            'gallery_id' => 3,
        ]);

        DB::table('pages')->insert([
            'slug' => 'prices',
            'title' => 'Was kostet',
            'subtitle' => 'Ich liebe meine Arbeit',
        ]);

        DB::table('pages')->insert([
            'slug' => 'faq',
            'title' => 'Was tun',
            'subtitle' => 'Ich liebe meine Arbeit',
        ]);

        DB::table('pages')->insert([
            'slug' => 'events',
            'title' => 'Mittun',
            'subtitle' => 'Ich liebe meine Arbeit',
        ]);

        DB::table('pages')->insert([
            'slug' => 'portfolio',
            'title' => 'Erfolg',
            'subtitle' => 'Spielerisch, lebendig, unerwartet',
        ]);

//        DB::table('pages')->insert([
//            'title' => 'Theater machen',
//            'subtitle' => 'Wir sind die Besten',
//        ]);
    }
}
