<?php

namespace Tests\Feature\Filament\Admin\Faq;

use App\Filament\Resources\FaqResource;
use App\Filament\Resources\FaqResource\Pages\ManageFaqs;
use App\Filament\Resources\UserResource\Pages\ListUsers;
use App\Models\Faq;
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

class FaqTableTest extends TestCase
{
    use RefreshDatabase;

//    public function setUp(): void
//    {
//        parent::setUp();
//        $this->withoutExceptionHandling();
//    }


    public function test_admin_can_view_admin_faq_page()
    {
        $this->actingAs($this->create_admin())
            ->get('/admin/faqs')
            ->assertStatus(200);

    }

    public function test_faqs_table_is_rendered()
    {
        Livewire::actingAs($this->create_admin())
            ->test(ManageFaqs::class)
            ->assertSuccessful();
    }

    public function test_faqs_are_listed()
    {
        $faqs = Faq::factory(5)->create();

        Livewire::actingAs($this->create_admin())
            ->test(ManageFaqs::class)
            ->assertCanSeeTableRecords($faqs)
            ->assertCountTableRecords(5);
    }

    public function test_set_of_columns_is_rendered()
    {
        Livewire::actingAs($this->create_admin())
            ->test(ManageFaqs::class)
            ->assertTableColumnExists('question')
            ->assertCanRenderTableColumn('answer')
            ->assertCanRenderTableColumn('post.title')
            ->assertCanRenderTableColumn('status')
        ;
    }

    public function test_columns_are_sorted_by_date_desc()
    {
        for ($i = 0; $i < 5; $i++) {
            Faq::factory()->create(['created_at' => fake()->dateTime]);
        }

        $faqs = Faq::all();

        Livewire::actingAs($this->create_admin())
            ->test(ManageFaqs::class)
            ->assertCanSeeTableRecords($faqs->sortByDesc('created_at'), inOrder: true);
    }

    public function test_can_get_linked_post_title()
    {
        $post = Post::factory()->create();
        $faq = Faq::factory()->create(['post_id' => $post->id,]);

        Livewire::actingAs($this->create_admin())
            ->test(ManageFaqs::class)
            ->assertTableColumnStateSet('post.title', $faq->post->title, record: $faq)
            ->assertTableColumnStateNotSet('post.title', 'Non-existing Title', record: $faq);
    }

    public function test_can_delete_single_faq()
    {
        $faq = Faq::factory()->create();

        Livewire::actingAs($this->create_admin())
            ->test(ManageFaqs::class)
            ->callTableAction(DeleteAction::class, $faq)
        ;

        $this->assertModelMissing($faq);
    }

    public function test_can_bulk_delete_faqs()
    {
        $faqs = Faq::factory(2)->create();

        Livewire::actingAs($this->create_admin())
            ->test(ManageFaqs::class)
            ->callTableBulkAction(DeleteAction::class, $faqs)
        ;

        foreach ($faqs as $faq) {
            $this->assertModelMissing($faq);
        }
    }

    public function test_can_edit_faq_question()
    {
        $faq = Faq::factory()->create();

        Livewire::actingAs($this->create_admin())
            ->test(ManageFaqs::class)
            ->callTableAction(EditAction::class, $faq, data: [
                'question' => $question = fake()->words(asText: true),
            ])
            ->assertHasNoTableActionErrors()
        ;

        $this->assertEquals(Faq::find($faq->id)->question, $question);
    }

    public function test_can_edit_faq_answer()
    {
        $faq = Faq::factory()->create();

        Livewire::actingAs($this->create_admin())
            ->test(ManageFaqs::class)
            ->callTableAction(EditAction::class, $faq, data: [
                'answer' => $answer = fake()->words(asText: true),
            ])
            ->assertHasNoTableActionErrors()
        ;

        $this->assertEquals(Faq::find($faq->id)->answer, $answer);
    }

    public function test_can_switch_faq_status()
    {
        $status = Arr::random([false, true]);
        $faq = Faq::factory()->create(['status' => $status]);

        Livewire::actingAs($this->create_admin())
            ->test(ManageFaqs::class)
            ->callTableAction(EditAction::class, $faq, data: [
                'status' => $newStatus = !$status,
            ])
            ->assertHasNoTableActionErrors()
        ;

        $this->assertSame((bool)Faq::find($faq->id)->status, $newStatus);
    }

    // TODO: test_can_select_linked_post

    public function test_can_edit_faq_link_label()
    {
        $faq = Faq::factory()->create();

        Livewire::actingAs($this->create_admin())
            ->test(ManageFaqs::class)
            ->callTableAction(EditAction::class, $faq, data: [
                'link_label' => $link_label = 'Sehr interessant',
            ])
            ->assertHasNoTableActionErrors()
        ;

        $this->assertEquals(Faq::find($faq->id)->link_label, $link_label);
    }

    public function test_can_validate_faq_data()
    {
        $faq = Faq::factory()->create();

        Livewire::actingAs($this->create_admin())
            ->test(ManageFaqs::class)
            ->callTableAction(EditAction::class, $faq, data: [
                'question' => null,
                'answer' => null,
            ])
            ->assertHasTableActionErrors(['question' => ['required'], 'answer' => ['required']])
        ;
    }

    public function test_can_load_existing_faq_data_for_editing()
    {
        $post = Post::factory()->create();
        $faq = Faq::factory()->create();

        Livewire::actingAs($this->create_admin())
            ->test(ManageFaqs::class)
            ->mountTableAction(EditAction::class, $faq)
            ->assertTableActionDataSet([
                'question' => $faq->question,
                'answer' => $faq->answer,
            ])
            ->setTableActionData([
                'question' => $question = fake()->words(asText: true),
                'answer' => $answer = fake()->text(100),
                'post_id' => $post_id = $post->id,
                'link_label' => $link_label = 'Sehr interessant',
            ])
            ->callMountedTableAction()
            ->assertHasNoTableActionErrors()
        ;

        $faqUpdated = Faq::find($faq->id);
        $this->assertEquals($faqUpdated->question, $question);
        $this->assertEquals($faqUpdated->answer, $answer);
        $this->assertEquals($faqUpdated->post_id, $post_id);
        $this->assertEquals($faqUpdated->link_label, $link_label);
    }

    public function test_verified_client_cannot_view_admin_faq_page()
    {
        $this->actingAs($this->create_client())
            ->get('/admin/faqs')
            ->assertStatus(403);
    }
}
