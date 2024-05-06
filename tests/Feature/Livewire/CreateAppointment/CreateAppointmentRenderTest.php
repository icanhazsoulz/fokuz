<?php

namespace Tests\Feature\Livewire\CreateAppointment;

use App\Livewire\Forms\CreateAppointment;

use Livewire\Livewire;
use Tests\TestCase;

class CreateAppointmentRenderTest extends TestCase
{
    // What does this test do?
    public function test_renders_successfully()
    {
        Livewire::test(CreateAppointment::class)
            ->assertStatus(200);
    }

    public function test_component_exists_on_the_page()
    {
        $this->get('/')
            ->assertSeeLivewire(CreateAppointment::class);
    }


    /** Field validations */

    public function test_email_field_is_required()
    {
        Livewire::test(CreateAppointment::class)
            ->set('form.email', '')
            ->call('save')
            ->assertHasErrors(['form.email' => ['required']]);
    }

    public function test_email_field_has_type_email()
    {
        Livewire::test(CreateAppointment::class)
            ->set('form.email', 'not.email.format')
            ->call('save')
            ->assertHasErrors(['form.email' => ['email']]);
    }

    public function test_phone_field_is_required()
    {
        Livewire::test(CreateAppointment::class)
            ->set('form.phone', '')
            ->call('save')
            ->assertHasErrors(['form.phone' => ['required']]);
    }

    public function test_name_field_is_required()
    {
        Livewire::test(CreateAppointment::class)
            ->set('form.name', '')
            ->call('save')
            ->assertHasErrors(['form.name' => ['required']]);
    }

    public function test_category_id_field_is_required()
    {
        Livewire::test(CreateAppointment::class)
            ->set('form.categoryId', '')
            ->call('save')
            ->assertHasErrors(['form.categoryId' => ['required']]);
    }

    public function test_client_source_id_field_is_required()
    {
        Livewire::test(CreateAppointment::class)
            ->set('form.clientSourceId', '')
            ->call('save')
            ->assertHasErrors(['form.clientSourceId' => ['required']]);
    }

    public function test_can_set_categories()
    {
        // TODO: mock or actual categories
        $categories = [];
        Livewire::test(CreateAppointment::class)
            ->set('categories', $categories)
            ->assertSet('categories', $categories);
    }

    public function test_can_set_client_sources()
    {
        // TODO: mock or actual
        $clientSources = [];
        Livewire::test(CreateAppointment::class)
            ->set('clientSources', $clientSources)
            ->assertSet('clientSources', $clientSources);
    }
}
