<?php

namespace Tests\Feature\Filament\Admin\Pet;

use App\Filament\Resources\PetResource\Pages\EditPet;
use App\Filament\Resources\PetResource\Pages\ListPets;
use App\Models\Pet;
use App\Models\Type;
use App\Models\User;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Livewire\Livewire;
use Spatie\Permission\Models\Role;
use Termwind\Components\Li;

class PetTableTest extends \Tests\TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_admin_pets_page()
    {
        $this->actingAs($this->create_admin())
            ->get('/admin/pets')
            ->assertStatus(200);
    }

    public function test_verified_client_cannot_view_admin_pets_page()
    {
        $this->actingAs($this->create_client())
            ->get('/admin/pets')
            ->assertStatus(403);
    }

    public function test_pets_table_is_rendered()
    {
        Livewire::actingAs($this->create_admin())
            ->test(ListPets::class)
            ->assertSuccessful();
    }

    public function test_pets_are_listed()
    {
        $pets = $this->createPet(3);
        Livewire::actingAs($this->create_admin())
            ->test(ListPets::class)
            ->assertCanSeeTableRecords($pets)
            ->assertCountTableRecords(3);
    }

    public function test_set_of_pet_columns_is_rendered()
    {
        Livewire::actingAs($this->create_admin())
            ->test(ListPets::class)
            ->assertCanRenderTableColumn('name')
            ->assertCanRenderTableColumn('image')
            ->assertCanRenderTableColumn('sex')
            ->assertCanRenderTableColumn('dob')
            ->assertCanRenderTableColumn('type.name')
            ->assertCanRenderTableColumn('breed')
            ->assertCanRenderTableColumn('user.name')
        ;
    }

    public function test_admin_can_delete_single_pet()
    {
        $pet = $this->createPet()->first();

        Livewire::actingAs($this->create_admin())
            ->test(ListPets::class)
            ->callTableAction(DeleteAction::class, $pet)
        ;

        $this->assertModelMissing($pet);
    }

    public function test_admin_can_bulk_delete_pets()
    {
        $pets = $this->createPet(2);

        Livewire::actingAs($this->create_admin())
            ->test(ListPets::class)
            ->callTableBulkAction(DeleteAction::class, $pets)
        ;

        foreach ($pets as $pet) {
            $this->assertModelMissing($pet);
        }
    }

    // TODO: all fields
    public function test_admin_can_edit_pet_record()
    {
        $pet = $this->createPet()->first();
        $sex = $pet->sex === 'female' ? 'male' : 'female';

        Livewire::actingAs($this->create_admin())
            ->test(ListPets::class)
            ->callTableAction('edit', $pet, data: [
                'name' => $name = fake()->name,
                'dob' => $dob = fake()->date,
                // 'type' =>,
                'sex' => $sex,
                'breed' => $breed = fake()->word,
                // image,
                // owner,
            ])
            ->assertHasNoTableActionErrors();

        $pet->refresh();
        $this->assertEquals($pet->name, $name);
        $this->assertEquals($pet->dob, $dob);
        $this->assertEquals($pet->sex, $sex);
        $this->assertEquals($pet->breed, $breed);
    }

    public function test_can_validate_pet_data()
    {
        $pet = $this->createPet()->first();

        Livewire::actingAs($this->create_admin())
            ->test(ListPets::class)
            ->callTableAction(EditAction::class, $pet, data: [
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

    public function test_can_load_existing_pet_data_for_editing()
    {
        //
    }

    public function test_can_edit_pet_type_record()
    {

    }

    public function test_can_add_pet_type_record()
    {

    }

    // Helpers

    private function createPet($count = 1)
    {
        $type = Type::create(['slug' => 'cat', 'name' => 'Cat']);
        $owner = $this->create_client();
        return Pet::factory($count)->create([
            'user_id' => $owner->id,
            'type_id' => $type->id,
        ]);
    }
}
