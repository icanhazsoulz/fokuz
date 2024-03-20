<?php

namespace Tests\Feature\Filament\App\Appointment;

use App\Filament\App\Resources\AppointmentResource\Pages\ManageAppointments;
use App\Models\Appointment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class AppointmentTableTest extends TestCase
{
    use RefreshDatabase;

    public function test_client_can_view_client_appointments_page()
    {
        $this->actingAs($this->create_client())
            ->get('/app/appointments')
            ->assertStatus(200);

    }

    public function test_admin_cannot_view_client_appointments_page()
    {
        $this->actingAs($this->create_admin())
            ->get('/app/appointments')
            ->assertStatus(200);

    }

    public function test_appointments_table_is_rendered()
    {
        Livewire::actingAs($this->create_client())
            ->test(ManageAppointments::class)
            ->assertSuccessful();
    }

    public function test_only_own_client_appointments_are_listed()
    {

    }

    public function test_set_of_columns_is_rendered()
    {
        Livewire::actingAs($this->create_client())
            ->test(ManageAppointments::class)
            ->assertCanRenderTableColumn('category.name')
            ->assertCanRenderTableColumn('address')
            ->assertCanRenderTableColumn('shelter.name')
            ->assertCanRenderTableColumn('status')
        ;
    }

    public function test_columns_are_sorted_by_date_desc()
    {
        for ($i = 0; $i < 3; $i++) {
            Appointment::factory()->create(['created_at' => fake()->dateTime]);
        }

        $faqs = Appointment::all();

        Livewire::actingAs($this->create_client())
            ->test(ManageAppointments::class)
            ->assertCanSeeTableRecords($faqs->sortByDesc('created_at'), inOrder: true);
    }

    public function test_client_can_delete_single_appointment()
    {

    }

    public function test_client_can_bulk_delete_appointments()
    {

    }

    public function test_client_can_cancel_an_appointment()
    {

    }

    public function test_can_validate_appointment_data()
    {

    }

    public function test_client_can_change_appointment_date_and_time()
    {

    }
}
