<?php

namespace App\Livewire;

use Illuminate\Support\Facades\View;
use Livewire\Component;

class Pages extends Component
{
    public string $page;

    public function mount($page = '')
    {
        $this->page = $page;
    }

    public function render()
    {
        $prefix = 'livewire.pages.';
        $prefix = in_array($this->page, ['login', 'register', 'forgot-password']) ? $prefix.'auth.' : $prefix;
        $page = $this->page ?: 'home';

        $view = $prefix.$page;

        $view = View::exists($view) ? $view : 'livewire.404';

//        abort_unless(View::exists($view), 404);

        return view($view);
    }
}
