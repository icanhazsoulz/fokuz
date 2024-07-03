<?php

namespace Tests\Feature\Filament\Admin\Testimonial;

use App\Filament\Resources\TestimonialResource\Pages\ManageTestimonials;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;

class TestimonialTableTest extends \Tests\TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_admin_testimonials_page()
    {
        $this->actingAs($this->create_admin())
            ->get('/admin/testimonials')
            ->assertStatus(200);
    }

    public function test_verified_client_cannot_view_admin_testimonials_page()
    {
        $this->actingAs($this->create_client())
            ->get('/admin/testimonials')
            ->assertStatus(403);
    }

    public function test_testimonials_table_is_rendered()
    {
        Livewire::actingAs($this->create_admin())
            ->test(ManageTestimonials::class)
            ->assertSuccessful();
    }

    public function test_testimonials_are_listed()
    {
        $testimonials = $this->createTestimonial(3);
        Livewire::actingAs($this->create_admin())
            ->test(ManageTestimonials::class)
            ->assertCanSeeTableRecords($testimonials)
            ->assertCountTableRecords(3);
    }

    public function test_set_of_testimonial_columns_is_rendered()
    {
        Livewire::actingAs($this->create_admin())
            ->test(ManageTestimonials::class)
            ->assertCanRenderTableColumn('image')
            ->assertCanRenderTableColumn('user.name')
            ->assertCanRenderTableColumn('author')
            ->assertCanRenderTableColumn('text')
            ->assertCanRenderTableColumn('status')
            ->assertCanRenderTableColumn('featured')
        ;
    }

    public function test_admin_can_delete_single_testimonial()
    {
        $testimonial = $this->createTestimonial()->first();

        Livewire::actingAs($this->create_admin())
            ->test(ManageTestimonials::class)
            ->callTableAction(DeleteAction::class, $testimonial)
        ;

        $this->assertModelMissing($testimonial);
    }

    public function test_admin_can_bulk_delete_testimonials()
    {
        $testimonials = $this->createTestimonial(2);

        Livewire::actingAs($this->create_admin())
            ->test(ManageTestimonials::class)
            ->callTableBulkAction(DeleteAction::class, $testimonials)
        ;

        foreach ($testimonials as $testimonial) {
            $this->assertModelMissing($testimonial);
        }
    }

    // TODO: all fields
    public function test_admin_can_edit_testimonial_record()
    {
        $testimonial = $this->createTestimonial()->first();
        $sex = $testimonial->sex === 'female' ? 'male' : 'female';

        Livewire::actingAs($this->create_admin())
            ->test(ManageTestimonials::class)
            ->callTableAction('edit', $testimonial, data: [
                'name' => $name = fake()->name,
                'dob' => $dob = fake()->date,
                // 'type' =>,
                'sex' => $sex,
                'breed' => $breed = fake()->word,
                // image,
                // owner,
            ])
            ->assertHasNoTableActionErrors();

        $testimonial->refresh();
        $this->assertEquals($testimonial->name, $name);
        $this->assertEquals($testimonial->dob, $dob);
        $this->assertEquals($testimonial->sex, $sex);
        $this->assertEquals($testimonial->breed, $breed);
    }

    public function test_can_validate_testimonial_data()
    {
        $testimonial = $this->createTestimonial()->first();

        Livewire::actingAs($this->create_admin())
            ->test(ManageTestimonials::class)
            ->callTableAction(EditAction::class, $testimonial, data: [
                'name' => null,
                'type_id' => null,
                'user_id' => null,
            ])
            ->assertHasTableActionErrors([
                'name' => ['required'],
                'type_id' => ['required'],
                'user_id' => ['required'],
            ]);
    }

    public function test_can_load_existing_faq_data_for_editing()
    {
        //
    }

    public function test_can_edit_testimonial_type_record()
    {

    }

    public function test_can_add_testimonial_type_record()
    {

    }

    // Helpers

    private function createTestimonial($count = 1)
    {
        //
    }
}
