<?php

namespace App\Livewire;

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

        return view('livewire.pages.'.$page);
    }
}
