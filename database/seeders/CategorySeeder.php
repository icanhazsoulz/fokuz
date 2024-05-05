<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'id' => 1,
            'slug' => 'my_studio',
            'name' => 'My Studio',
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'slug' => 'mobile_studio',
            'name' => 'Mobile Studio',
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'slug' => 'moment',
            'name' => 'Moment',
        ]);

        DB::table('categories')->insert([
            'id' => 4,
            'slug' => 'reportage',
            'name' => 'Reportage',
        ]);
    }
}
