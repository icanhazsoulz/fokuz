<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            'slug' => 'cat',
            'name' => 'Cat',
        ]);

        DB::table('types')->insert([
            'slug' => 'dog',
            'name' => 'Dog',
        ]);

        DB::table('types')->insert([
            'slug' => 'rabbit',
            'name' => 'Rabbit',
        ]);

        DB::table('types')->insert([
            'slug' => 'ferret',
            'name' => 'Ferret',
        ]);
    }
}
