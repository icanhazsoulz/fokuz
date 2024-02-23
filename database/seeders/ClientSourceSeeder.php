<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('client_sources')->insert([
            'key' => 'web_search',
            'name' => 'Web search',
        ]);

        DB::table('client_sources')->insert([
            'key' => 'recommendation',
            'name' => 'Recommendation',
        ]);

        DB::table('client_sources')->insert([
            'key' => 'instagram',
            'name' => 'Instagram',
        ]);

        DB::table('client_sources')->insert([
            'key' => 'ads',
            'name' => 'Advertisement',
        ]);

        DB::table('client_sources')->insert([
            'key' => 'other',
            'name' => 'Other',
        ]);
    }
}
