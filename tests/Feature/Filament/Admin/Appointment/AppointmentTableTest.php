<?php

namespace Tests\Feature\Filament\Admin\Appointment;

use App\Filament\Resources\AppointmentResource\Pages\ManageAppointments;
use App\Models\Appointment;
use App\Models\User;
use Filament\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class AppointmentTableTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_admin_appointments_page()
    {
        $this->actingAs($this->create_admin())
            ->get('/admin/appointments')
            ->assertStatus(200);
    }

    public function test_verified_client_cannot_view_admin_appointments_page()
    {
        $this->actingAs($this->create_client())
            ->get('/admin/appointments')
            ->assertStatus(403);
    }

    public function test_appointments_page_is_rendered()
    {
        Livewire::actingAs($this->create_admin())
            ->test(ManageAppointments::class)
            ->assertSuccessful();
    }

    public function test_set_of_columns_is_rendered()
    {
        Livewire::actingAs($this->create_admin())
            ->test(ManageAppointments::class)
            ->assertCanRenderTableColumn('appointmentable.email')
            ->assertCanRenderTableColumn('appointmentable.name')
            ->assertCanRenderTableColumn('category.name')
            ->assertCanRenderTableColumn('address')
//            ->assertCanRenderTableColumn('shelter.name')
            ->assertCanRenderTableColumn('status')
        ;
    }

    public function test_appointments_are_listed()
    {
        $appointment = $this->createAppointment(2);

        Livewire::actingAs($this->create_admin())
            ->test(ManageAppointments::class)
            ->assertCanSeeTableRecords($appointment)
            ->assertCountTableRecords(2);
    }

    public function test_columns_are_sorted_by_date_desc()
    {
        $appointments = $this->createAppointment(3);

        Livewire::actingAs($this->create_admin())
            ->test(ManageAppointments::class)
            ->assertCanSeeTableRecords($appointments->sortByDesc('created_at'), inOrder: true);
    }

    public function test_admin_can_delete_single_appointment()
    {
        $appointment = $this->createAppointment()->first();
        Livewire::actingAs($this->create_admin())
            ->test(ManageAppointments::class)
            ->callTableAction(DeleteAction::class, $appointment)
        ;

        $this->assertModelMissing($appointment);
    }

    public function test_admin_can_bulk_delete_appointments()
    {
        $appointments = $this->createAppointment(2);

        Livewire::actingAs($this->create_admin())
            ->test(ManageAppointments::class)
            ->callTableBulkAction(DeleteAction::class, $appointments)
        ;
        foreach ($appointments as $appointment) {
            $this->assertModelMissing($appointment);
        }
    }

    public function test_actions_exist_on_messages()
    {
        Livewire::actingAs($this->create_admin())
            ->test(ManageAppointments::class)
            ->assertTableActionExists(EditAction::class)
            ->assertTableActionDoesNotExist(ViewAction::class)
            ->assertTableActionExists(DeleteAction::class)
            ->assertTableBulkActionExists(DeleteAction::class);
    }

    public function test_admin_can_cancel_an_appointment()
    {

    }

    public function test_can_validate_appointment_data()
    {

    }

    public function test_admin_can_change_appointment_date_and_time()
    {

    }


    // Helpers
    protected function createAppointment($count = 1)
    {
        $user = $this->create_client();
        return Appointment::factory($count)->create([
            'appointmentable_id' => $user->id,
            'appointmentable_type' => User::class,
            'address' => fake()->address,
            'created_at' => fake()->dateTime,
        ]);
    }
}
