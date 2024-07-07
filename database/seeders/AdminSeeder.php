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
            'name' => 'Julia  Kuznetcova',
            'email' => 'admin@fokuz.com',
            'phone' => fake()->phoneNumber,
            'password' => Hash::make('0fodKz6sDIQRh8P'),
        ]);
        $admin->save();
        $admin->assignRole('admin');
    }
}
