<?php

namespace App\Livewire;

use App\Models\Social;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class SocialsWidget extends Component
{
    public Collection $socials;

    public function mount()
    {
        $this->socials = Social::all();
    }

    public function render()
    {
        return view('livewire.socials-widget');
    }
}
