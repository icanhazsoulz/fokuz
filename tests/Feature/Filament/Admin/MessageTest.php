<?php

namespace Tests\Feature\Filament\Admin;


use App\Filament\Resources\MessageResource\Pages\ManageMessages;
use App\Models\Message;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
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

    public function test_messages_are_listed()
    {
        $user = $this->create_client();
        $messages = Message::factory(2)->create([
            'user_id' => $user->id,
        ]);

        Livewire::actingAs($this->create_admin())
            ->test(ManageMessages::class)
            ->assertCanSeeTableRecords($messages)
            ->assertCountTableRecords(2);
    }

    public function test_columns_are_sorted_by_date_desc()
    {
        $user = $this->create_client();
        for ($i = 0; $i < 5; $i++) {
            Message::factory()->create([
                'user_id' => $user->id,
                'created_at' => fake()->dateTime
            ]);
        }

        $messages = Message::all();

        Livewire::actingAs($this->create_admin())
            ->test(ManageMessages::class)
            ->assertCanSeeTableRecords($messages->sortByDesc('created_at'), inOrder: true);
    }

    public function test_can_get_authors_contact_data()
    {
        $user = $this->create_client();
        $message = Message::factory()->create(['user_id' => $user->id,]);

        Livewire::actingAs($this->create_admin())
            ->test(ManageMessages::class)
            ->assertTableColumnStateSet('user.name', $message->user->name, record: $message)
            ->assertTableColumnStateNotSet('user.name', 'Rumpelstilzchen', record: $message)
            ->assertTableColumnStateSet('user.email', $message->user->email, record: $message)
            ->assertTableColumnStateNotSet('user.email', 'my.email@some.domain', record: $message)
            ->assertTableColumnStateSet('user.phone', $message->user->phone, record: $message)
            ->assertTableColumnStateNotSet('user.phone', '000.00.00', record: $message)
            ;
    }

    public function test_can_delete_single_message()
    {
        $user = $this->create_client();
        $message = Message::factory()->create(['user_id' => $user->id]);

        Livewire::actingAs($this->create_admin())
            ->test(ManageMessages::class)
            ->callTableAction(DeleteAction::class, $message)
        ;

        $this->assertModelMissing($message);
    }

    public function test_message_is_cascade_deleted_with_author()
    {

    }

    public function test_can_bulk_delete_messages()
    {
        $user = $this->create_client();
        $messages = Message::factory(2)->create(['user_id' => $user->id]);

        Livewire::actingAs($this->create_admin())
            ->test(ManageMessages::class)
            ->callTableBulkAction(DeleteAction::class, $messages)
        ;

        foreach ($messages as $message) {
            $this->assertModelMissing($message);
        }
    }

    public function test_actions_exist_on_messages(){
        Livewire::actingAs($this->create_admin())
            ->test(ManageMessages::class)
            ->assertTableActionExists(ReadAction::class)
            ->assertTableBulkActionExists(MarkAsReadAction::class)
            ->assertTableActionDoesNotExist(EditAction::class)
            ->assertTableBulkActionDoesNotExist(EditAction::class);
    }

    /**
     * can open modal to read
     * can mark as read/unread
     * assert new messages status
     */
    public function test_can_read_a_message() {

    }
}
