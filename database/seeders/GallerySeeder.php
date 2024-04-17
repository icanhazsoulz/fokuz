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
            'id' => 1,
            'title' => 'Home',
            'category' => 'slider',
            'status' => 1,
        ]);

        DB::table('galleries')->insert([
            'id' => 2,
            'title' => 'Da bin ich',
            'category' => 'slider',
            'status' => 1,
        ]);

        DB::table('galleries')->insert([
            'id' => 3,
            'title' => 'Kann sein',
            'category' => 'slider',
            'status' => 1,
        ]);
    }
}
