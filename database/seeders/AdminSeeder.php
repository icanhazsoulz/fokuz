<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new User([
            'first_name' => 'Iuliia',
            'last_name' => 'Kuznetsova',
            'email' => 'admin@fokuz.com',
            'phone' => fake()->phoneNumber,
            'password' => Hash::make('admin'),
        ]);
        $admin->save();
        $admin->assignRole('admin');
    }
}
