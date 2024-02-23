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
            'key' => 'cat',
            'name' => 'Cat',
        ]);

        DB::table('types')->insert([
            'key' => 'dog',
            'name' => 'Dog',
        ]);

        DB::table('types')->insert([
            'key' => 'rabbit',
            'name' => 'Rabbit',
        ]);

        DB::table('types')->insert([
            'key' => 'ferret',
            'name' => 'Ferret',
        ]);
    }
}
