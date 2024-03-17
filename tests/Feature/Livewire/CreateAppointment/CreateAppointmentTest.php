<?php

namespace Tests\Feature\Livewire\CreateAppointment;

use App\Livewire\Forms\CreateAppointment;
use App\Models\Appointment;
use App\Models\Category;
use App\Models\ClientSource;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;
use Spatie\Permission\Models\Role;
use Tests\TestCase;
use function React\Promise\all;

class CreateAppointmentTest extends TestCase
{
    use RefreshDatabase;

    protected array $client1 = [
        'email' => 'arya.stark@winterfell.org',
        'phone' => '999.888.777',
        'first_name' => 'Arya',
        'last_name' => 'Stark',
    ];

    public function setUp(): void
    {
        parent::setUp();

        $this->seed('CategorySeeder');
        $this->seed('ClientSourceSeeder');

        $this->seed_admin();
    }

    public function test_can_create_appointment()
    {
        $this->assertEquals(0, Appointment::count());

        self::save_appointment(array_merge($this->client1, self::fill_appointment()));

        $this->assertEquals(1, Appointment::count());
    }

    public function test_can_add_new_appointment_to_a_client()
    {
        $this->assertEquals(0, Appointment::count());

        $n = 3;
        for ($i = 1; $i <= $n; $i++) {
            self::save_appointment(array_merge(
                $this->client1, // fixed
                self::fill_appointment()) // newly generated
            );
        }

        $this->assertEquals(1, User::query()->role('client')->count());
        $this->assertEquals($n, Appointment::count());
    }

    /** Helpers */
    private static function getRecordId($table)
    {
        return Arr::random(DB::table($table)->pluck('id')->toArray());
    }

    protected static function fill_appointment(): array
    {
        return [
            'category_id' => self::getRecordId('categories'),
            'address' => fake()->address,
            'description' => fake()->text(100),
            'client_source_id' => self::getRecordId('client_sources'),
        ];
    }

    private static function save_appointment($arr)
    {
        Livewire::test(CreateAppointment::class)
            ->set('form.email', $arr['email'])
            ->set('form.phone', $arr['phone'])
            ->set('form.firstName', $arr['first_name'])
            ->set('form.lastName', $arr['last_name'])
            ->set('form.categoryId', $arr['category_id'])
            ->set('form.address', $arr['address'])
            ->set('form.description', $arr['description'])
            ->set('form.clientSourceId', $arr['client_source_id'])
            ->call('save');
    }
}
