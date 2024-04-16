<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galleries')->insert([
            'title' => 'Home',
            'category' => 'slider',
            'status' => 1,
        ]);

        DB::table('galleries')->insert([
            'title' => 'Da bin ich',
            'category' => 'slider',
            'status' => 1,
        ]);

        DB::table('galleries')->insert([
            'title' => 'Kann sein',
            'category' => 'slider',
            'status' => 1,
        ]);
    }
}
