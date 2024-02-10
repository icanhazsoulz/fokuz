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
        $page = $this->page ?: 'home';

        $view = 'livewire.pages.'.$page;

        $view = View::exists($view) ? $view : 'livewire.404';

//        abort_unless(View::exists($view), 404);

        return view($view);
    }
}
