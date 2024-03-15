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
            'key' => 'my_studio',
            'name' => 'My Studio',
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'key' => 'mobile_studio',
            'name' => 'Mobile Studio',
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'key' => 'moment',
            'name' => 'Moment',
        ]);

        DB::table('categories')->insert([
            'id' => 4,
            'key' => 'reportage',
            'name' => 'Reportage',
        ]);
    }
}
