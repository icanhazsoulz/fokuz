<?php

namespace Tests\Feature\Filament\Admin\Faq;

use App\Filament\Resources\FaqResource;
use App\Filament\Resources\FaqResource\Pages\ManageFaqs;
use App\Filament\Resources\MessageResource\Pages\ManageMessages;
use App\Filament\Resources\UserResource\Pages\ListUsers;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Post;
use App\Models\User;
use Database\Factories\UserFactory;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Livewire\Livewire;
use PHPUnit\Event\Code\Throwable;
use Tests\TestCase;

class MessageTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_admin_messages_page()
    {
        $this->actingAs($this->create_admin())
            ->get('/admin/messages')
            ->assertStatus(200);

    }

    public function test_verified_client_cannot_view_admin_messages_page()
    {
        $this->actingAs($this->create_client())
            ->get('/admin/messages')
            ->assertStatus(403);

    }

    public function test_messages_table_is_rendered()
    {
        Livewire::actingAs($this->create_admin())
            ->test(ManageMessages::class)
            ->assertSuccessful();
    }

//    public function test_messages_are_listed()
//    {
//        $messages = Message::factory(5)->create();
//
//        Livewire::actingAs($this->create_admin())
//            ->test(ManageMessages::class)
//            ->assertCanSeeTableRecords($messages)
//            ->assertCountTableRecords(5);
//    }

    public function test_set_of_columns_is_rendered()
    {
        Livewire::actingAs($this->create_admin())
            ->test(ManageMessages::class)
            ->assertCanRenderTableColumn('user.name')
            ->assertCanRenderTableColumn('message')
            ->assertCanRenderTableColumn('user.email')
            ->assertCanRenderTableColumn('user.phone')
            ->assertCanRenderTableColumn('status')
        ;
    }
}
