<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Pages;
use Tests\TestCase;

class PagesTest extends TestCase
{
    public function test_renders_home_page()
    {
        $this->get('/')->assertSeeLivewire(Pages::class);
    }

    // Assert there is a correct static page at each of corresponding urls
    public function test_renders_correct_set_of_static_pages()
    {
        $dir = new \DirectoryIterator(resource_path('views/livewire/pages'));

        foreach ($dir as $file) {
            if ($file->isFile()) {
                $this
                    ->get($file->getBasename('.blade.php'))
                    ->assertSeeLivewire(Pages::class);
            }
        }
    }
//
//    public function test_renders_404_page_if_view_does_not_exist()
//    {
//
//    }
}
