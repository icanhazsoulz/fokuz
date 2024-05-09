<?php

namespace Tests\Feature\Livewire\Appointment;

use App\Livewire\Forms\CreateAppointment;
use App\Models\Appointment;
use App\Models\Category;
use App\Models\ClientSource;
use App\Models\Type;
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
        'name' => 'Arya Stark',
    ];

    public function setUp(): void
    {
        parent::setUp();

        Role::create(['name'=> 'client']);

        $this->seed('CategorySeeder');
        $this->seed('ClientSourceSeeder');
    }

    public function test_client_can_create_an_appointment()
    {
        $this->assertEquals(0, Appointment::query()->count());

        self::save_appointment(array_merge($this->client1, self::fill_appointment()));

        $this->assertEquals(1, Appointment::query()->count());
    }

    public function test_can_add_new_appointments_to_a_client()
    {
        $this->assertEquals(0, Appointment::query()->count());

        $n = 3;
        for ($i = 1; $i <= $n; $i++) {
            self::save_appointment(array_merge(
                $this->client1, // fixed
                self::fill_appointment()) // newly generated
            );
        }

        $this->assertEquals(1, User::query()->role('client')->count());
        $this->assertEquals($n, Appointment::query()->count());
    }

    public function test_can_select_existing_pet_type()
    {
        self::save_appointment(array_merge($this->client1, self::fill_appointment()));

        $this->assertEquals(Type::query()->first()->name, 'Hund');
    }

    public function test_can_add_new_pet_type()
    {
        self::save_appointment(array_merge($this->client1, self::fill_appointment('Katze')));
        $appointment = Appointment::query()->first();
        $this->assertEquals(Type::query()->first()->name, 'Katze');
    }

    /** Helpers */
    private static function getRecordId($table)
    {
        return Arr::random(DB::table($table)->pluck('id')->toArray());
    }


    /**
     * Create array containing appointment data
     *
     * @return array
     */
    protected static function fill_appointment($petType = null): array
    {

        $arr =  [
            'pet_name' => ucfirst(fake()->userName),
            'pet_type' => 'Hund',
            'category_id' => self::getRecordId('categories'),
            'address' => fake()->address,
            'description' => fake()->text(100),
            'client_source_id' => self::getRecordId('client_sources'),
        ];

        if ($petType) $arr['pet_type'] = $petType;

        return $arr;
    }

    private static function save_appointment($arr)
    {
        Livewire::test(CreateAppointment::class)
            ->set('form.email', $arr['email'])
            ->set('form.phone', $arr['phone'])
            ->set('form.name', $arr['name'])
            ->set('form.petName', $arr['pet_name'])
            ->set('form.petType', $arr['pet_type'])
            ->set('form.categoryId', $arr['category_id'])
            ->set('form.address', $arr['address'])
            ->set('form.description', $arr['description'])
            ->set('form.clientSourceId', $arr['client_source_id'])
            ->call('save');
    }
}
