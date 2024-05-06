<?php

namespace Tests\Feature\Livewire\CreateMessage;

use App\Livewire\Forms\CreateMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class CreateMessageRenderTest extends TestCase
{
    use RefreshDatabase;
    public function test_renders_successfully()
    {
        Livewire::test(CreateMessage::class)
            ->assertStatus(200);
    }

    public function test_component_exists_on_the_page()
    {
        $this->get('/contact')
            ->assertSeeLivewire(CreateMessage::class);
    }


    /** Field validations */

    public function test_email_field_is_required()
    {
        Livewire::test(CreateMessage::class)
            ->set('form.email', '')
            ->call('save')
            ->assertHasErrors(['form.email' => ['required']]);
    }

    public function test_email_field_has_type_email()
    {
        Livewire::test(CreateMessage::class)
            ->set('form.email', 'not.email.format')
            ->call('save')
            ->assertHasErrors(['form.email' => ['email']]);
    }

    public function test_name_field_is_required()
    {
        Livewire::test(CreateMessage::class)
            ->set('form.name', '')
            ->call('save')
            ->assertHasErrors(['form.name' => ['required']]);
    }

    public function test_message_field_is_required()
    {
        Livewire::test(CreateMessage::class)
            ->set('form.message', '')
            ->call('save')
            ->assertHasErrors(['form.message' => ['required']]);
    }
}
