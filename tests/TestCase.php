<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Hash;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function seed_admin()
    {
        $this->seed('RoleSeeder');

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
