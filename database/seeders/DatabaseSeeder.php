<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Order;
use App\Models\Post;
use App\Models\Testimonial;
use App\Models\User;
use Database\Factories\TestimonialFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'client']);

        $admin = new User([
            'name' => 'admin',
            'email' => 'admin@fokuz.com',
            'password' => Hash::make('admin'),
        ]);
        $admin->save();
        $admin->assignRole('admin');

        $this->call([ShelterSeeder::class]);

        $clients = User::factory(15)->create();
        foreach ($clients as $client) {
            $client->assignRole('client');

            $order = new Order([
                'user_id' => $client->id,
                'category' => Arr::random(['cats', 'dogs', 'small_animals']),
                'description' => fake()->text(100),
                'client_source' => Arr::random(['web_search', 'recommendation', 'facebook_ads', 'other_ads']),
                'shelter_id' => 1
            ]);
            $order->save();

            $message = new Message([
                'user_id' => $client->id,
                'message' => fake()->text(200),
            ]);
            $message->save();

            $testimonial = new Testimonial([
                'user_id' => $client->id,
                'author' => $client->first_name . ' ' . $client->last_name,
                'text' => fake()->text(200),
                'avatar' => fake()->url,
            ]);
            $testimonial->save();
        }

        Testimonial::factory(7)->create();
        Faq::factory(10)->create();
        Post::factory(25)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
