<?php

namespace Tests\Feature\Livewire\Message;

use App\Livewire\Forms\CreateMessage;
use App\Models\Message;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class CreateMessageTest extends TestCase
{
    use RefreshDatabase;

    public function test_new_client_can_create_message()
    {
        Role::create(['name' => 'client']);

        $this->assertEquals(0, Message::all()->count());
        $this->assertEquals(0, User::all()->count());

        Livewire::test(CreateMessage::class)
            ->set('form.email', 'arya.stark@winterfell.org')
            ->set('form.name', 'Arya Stark')
            ->set('form.message', fake()->text(200))
            ->call('save');

        $this->assertEquals(1, Message::all()->count());
        $this->assertEquals(1, User::all()->count());
    }

    public function test_existing_client_can_create_message()
    {
        $client = $this->create_client();
        $this->assertEquals(0, $client->messages->count());

        Livewire::test(CreateMessage::class)
            ->set('form.email', $client->email)
            ->set('form.name', $client->name)
            ->set('form.message', fake()->text(200))
            ->call('save')
        ;
        $client->refresh();
        $this->assertEquals(1, $client->messages->count());
    }

    // TODO: logged in client can see their data in the form
}
