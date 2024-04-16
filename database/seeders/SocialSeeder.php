<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('socials')->insert([
            'title' => 'Phone',
            'url' => 'tel:1234-567-890',
        ]);

        DB::table('socials')->insert([
            'title' => 'Pinterest',
            'url' => 'https://pinterest.com',
        ]);

        DB::table('socials')->insert([
            'title' => 'Instagram',
            'url' => 'https://www.instagram.com/fokuz.photo',
        ]);

        DB::table('socials')->insert([
            'title' => 'Facebook',
            'url' => 'https://facebook.com',
        ]);
    }
}
