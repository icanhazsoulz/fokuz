<?php

namespace Tests\Feature\Filament\App;


use App\Filament\App\Resources\MessageResource\Pages\ManageMessages;
use App\Models\Message;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class MessageTest extends TestCase
{
    use RefreshDatabase;

    public function test_client_can_view_client_messages_page()
    {
        $this->actingAs($this->create_client())
            ->get('/app/messages')
            ->assertStatus(200);
    }

    public function test_admin_cannot_view_client_messages_page()
    {
        $this->actingAs($this->create_admin())
            ->get('/app/messages')
            ->assertStatus(403);
    }

    public function test_messages_page_is_rendered()
    {
//        Livewire::actingAs($this->create_client())
//            ->test(ManageMessages::class)
//            ->assertSuccessful();
    }

    public function test_only_own_client_messages_are_listed()
    {

    }

    public function test_set_of_columns_is_rendered()
    {
//        $user = $this->create_client();
//        $message = Message::factory()->create(['user_id' => $user->id]);
//        print_r($user);
//        print_r($message);
//        Livewire::actingAs($user)
//            ->test(ManageMessages::class)
//            ->assertCanRenderTableColumn('message')
//            ->assertCanRenderTableColumn('created_at')
//        ;
    }

    public function test_messages_are_listed()
    {
//        $user = $this->create_client();
//        $messages = Message::factory(2)->create([
//            'user_id' => $user->id,
//        ]);
//
//        Livewire::actingAs($user)
//            ->test(ManageMessages::class)
//            ->assertCanSeeTableRecords($messages)
//            ->assertCountTableRecords(2);
    }

    public function test_columns_are_sorted_by_date_desc()
    {
//        $user = $this->create_client();
//        for ($i = 0; $i < 5; $i++) {
//            Message::factory()->create([
//                'user_id' => $user->id,
//                'created_at' => fake()->dateTime
//            ]);
//        }
//
//        $messages = Message::all();
//
//        Livewire::actingAs($user)
//            ->test(ManageMessages::class)
//            ->assertCanSeeTableRecords($messages->sortByDesc('created_at'), inOrder: true);
    }

    public function test_can_delete_single_message()
    {
//        $user = $this->create_client();
//        $message = Message::factory()->create(['user_id' => $user->id]);
//
//        Livewire::actingAs($user)
//            ->test(ManageMessages::class)
//            ->callTableAction(DeleteAction::class, $message)
//        ;
//
//        $this->assertModelMissing($message);
    }

    public function test_message_is_cascade_deleted_with_author()
    {

    }

    public function test_can_bulk_delete_messages()
    {
//        $user = $this->create_client();
//        $messages = Message::factory(2)->create(['user_id' => $user->id]);
//
//        Livewire::actingAs($user)
//            ->test(ManageMessages::class)
//            ->callTableBulkAction(DeleteAction::class, $messages)
//        ;
//
//        foreach ($messages as $message) {
//            $this->assertModelMissing($message);
//        }
    }

    public function test_actions_exist_on_messages()
    {
//        Livewire::actingAs($this->create_client())
//            ->test(ManageMessages::class)
//            ->assertTableActionExists(ViewAction::class)
//            ->assertTableActionDoesNotExist(EditAction::class)
//            ->assertTableActionExists(DeleteAction::class)
//            ->assertTableBulkActionExists(DeleteAction::class);
    }

    /**
     * TODO:
     * can open modal to read, see fields filled in
     * can mark as read/unread
     * assert new messages status
     */
    public function test_can_read_a_message() {

    }

    public function test_message_fields_disabled() {
//        $user = $this->create_client();
//        $message = Message::factory()->create(['user_id' => $user->id]);
//        Livewire::actingAs($user)
//            ->test(ManageMessages::class)
//            ->assertFormFieldIsDisabled('message');
    }
}
