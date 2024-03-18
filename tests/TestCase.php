<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function seed_admin()
    {
        Role::create(['name'=> 'admin']);
        $this->seed('AdminSeeder');
    }

    protected function create_admin(): User
    {
        Role::create(['name'=> 'admin']);
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        return $admin;
    }

    protected function create_client(): User
    {
        Role::create(['name'=> 'client']);
        $client = User::factory()->create();
        $client->assignRole('client');

        return $client;
    }
}
