<?php

namespace Tests\Feature\Filament\Admin\Faq;

use App\Filament\Resources\FaqResource;
use App\Models\Faq;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class FaqTableTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed_admin();
    }

    public function test_admin_can_view_admin_faq_page()
    {
        $admin = User::query()->role('admin')->first();

        $this->actingAs($admin)
            ->get('/admin/faqs')
            ->assertStatus(200);
    }

    public function test_client_cannot_view_admin_faq_page()
    {
        $client = User::factory()->create()->assignRole('client');

        $this->actingAs($client)
            ->get('/admin/faqs')
            ->assertStatus(403);
    }
}
