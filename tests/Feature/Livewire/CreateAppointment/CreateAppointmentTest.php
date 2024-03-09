<?php

namespace Tests\Feature\Livewire\CreateAppointment;

use App\Livewire\Forms\CreateAppointment;
use App\Models\Appointment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class CreateAppointmentTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_set_categories()
    {
        // TODO: mock or actual categories
        $categories = [];
        Livewire::test(CreateAppointment::class)
            ->set('categories', $categories)
            ->assertSet('categories', $categories);
    }

//    public function test_can_create_appointment()
//    {
//        Role::create(['name' => 'client']);
//
//        $this->assertEquals(0, Appointment::count());
//
//        Livewire::test(CreateAppointment::class)
//            ->set('form.email', 'arya.stark@winterfell.org')
//            ->set('form.phone', fake()->phoneNumber)
//            ->set('form.firstName', 'Arya')
//            ->set('form.lastName', 'Stark')
//            ->set('form.categoryId', 2)
//            ->set('form.clientSourceId', 3)
//            ->call('save');
//
//        $this->assertEquals(1, Appointment::count());
//    }
}
