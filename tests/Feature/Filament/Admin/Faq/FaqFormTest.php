<?php

namespace Tests\Feature\Filament\Admin\Faq;

use App\Models\Faq;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class FaqFormTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->seed('CategorySeeder');
        $this->seed('ClientSourceSeeder');

        $this->seed_admin();
    }
}
