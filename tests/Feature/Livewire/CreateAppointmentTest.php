<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Forms\CreateAppointment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateAppointmentTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateAppointment::class)
            ->assertStatus(200);
    }

    public function test_component_exists_on_the_page()
    {
        $this->get('/')
            ->assertSeeLivewire(CreateAppointment::class);
    }
}
