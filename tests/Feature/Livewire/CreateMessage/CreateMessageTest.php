<?php

namespace Tests\Feature\Livewire\CreateMessage;

use App\Livewire\Forms\CreateMessage;
use App\Models\Message;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class CreateMessageTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_message()
    {
        Role::create(['name' => 'client']);

        $this->assertEquals(0, Message::count());

        Livewire::test(CreateMessage::class)
            ->set('form.email', 'arya.stark@winterfell.org')
            ->set('form.phone', fake()->phoneNumber)
            ->set('form.firstName', 'Arya')
            ->set('form.lastName', 'Stark')
            ->set('form.message', fake()->text(200))
            ->call('save');

        $this->assertEquals(1, Message::count());
    }
}
