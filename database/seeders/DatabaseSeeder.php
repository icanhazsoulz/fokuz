<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Appointment;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Order;
use App\Models\Partner;
use App\Models\Pet;
use App\Models\Photoshooting;
use App\Models\Post;
use App\Models\Shelter;
use App\Models\Testimonial;
use App\Models\Type;
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

        $this->call([RoleSeeder::class, CategorySeeder::class, ClientSourceSeeder::class, TypeSeeder::class]);

        $admin = new User([
            'first_name' => 'Iuliia',
            'last_name' => 'Kuznetsova',
            'email' => 'admin@fokuz.com',
            'phone' => fake()->phoneNumber,
            'password' => Hash::make('admin'),
        ]);
        $admin->save();
        $admin->assignRole('admin');

        Shelter::factory(8)->create();

        $clients = User::factory(15)->create();
        foreach ($clients as $client) {
            $client->assignRole('client');

            $type = Type::find(rand(1, 4));
            $pet = Pet::factory()->create([
                'user_id' => $client->id,
                'type_id' => $type->id,
            ]);

            $category = Category::find(rand(1, 4));

            $appointment = Appointment::create([
                'appointmentable_id' => $client->id,
                'appointmentable_type' => User::class,
                'category_id' => $category->id,
                'address' => fake()->address,
                'description' => fake()->text(100),
                'shelter_id' => rand(1, 7),
                'client_source_id' => rand(1, 5),
                'status' => Arr::random(['new', 'confirmed', 'completed', 'cancelled']),
            ]);

//            $order = new Order();
//            $order->order_uid = $order->generateUID();
//            $order->user_id = $client->id;
//            $order->fill([
//                'category_id' => $category_id,
//                'description' => fake()->text(100),
//                'shelter_id' => rand(1, 7),
//                'client_source_id' => rand(1, 5),
//                'status' => Arr::random(['new', 'confirmed', 'completed', 'cancelled']),
//            ]);
//            $order->save();

            // TODO: photoshooting existence and status corresponds to the appointment status?
            $photoshooting = Photoshooting::create([
                'user_id' => $client->id,
                'appointment_id' => $appointment->id,
            ]);

            // Client's content
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
        Partner::factory(15)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
