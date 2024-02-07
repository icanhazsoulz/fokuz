<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShelterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shelters')->insert([
            'name' => 'Shelter 01',
            'address' => 'Berlin',
            'email' => 'shelter01@example.com',
            'phone' => '9998877',
            'notes' => 'This is the Shelter 01 note',
        ]);

        DB::table('shelters')->insert([
            'name' => 'Shelter 02',
            'address' => 'Dresden',
            'email' => 'shelter02@example.com',
            'phone' => '999887755',
        ]);

        DB::table('shelters')->insert([
            'name' => 'Shelter 03',
            'address' => 'München',
            'email' => 'shelter03@example.com',
            'notes' => 'This is the Shelter 03 note',
        ]);
    }
}
