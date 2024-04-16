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
            'title' => 'Home',
        ]);

        DB::table('pages')->insert([
            'title' => 'Da bin ich',
            'subtitle' => 'Ich verwandle Ihre Tiere in echte Superstars!',
        ]);

        DB::table('pages')->insert([
            'title' => 'Ich über mich',
            'subtitle' => 'Ich liebe meine Arbeit',
        ]);

        DB::table('pages')->insert([
            'title' => 'Man über mich',
            'subtitle' => 'Ich liebe meine Arbeit',
        ]);

        DB::table('pages')->insert([
            'title' => 'Partner',
            'subtitle' => 'Ich liebe meine Arbeit',
        ]);

        DB::table('pages')->insert([
            'title' => 'Kann sein',
            'subtitle' => 'Bilderwelten: Lebendig, Echt, Einzigartig',
        ]);

        DB::table('pages')->insert([
            'title' => 'Was kostet',
            'subtitle' => 'Ich liebe meine Arbeit',
        ]);

        DB::table('pages')->insert([
            'title' => 'Was tun',
            'subtitle' => 'Ich liebe meine Arbeit',
        ]);

        DB::table('pages')->insert([
            'title' => 'Mittun',
            'subtitle' => 'Ich liebe meine Arbeit',
        ]);

        DB::table('pages')->insert([
            'title' => 'Erfolg',
            'subtitle' => 'Spielerisch, lebendig, unerwartet',
        ]);

        DB::table('pages')->insert([
            'title' => 'Theater machen',
            'subtitle' => 'Wir sind die Besten',
        ]);
    }
}
