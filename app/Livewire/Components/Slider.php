<?php

namespace App\Livewire\Components;

use App\Models\Gallery;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Slider extends Component
{
    public Gallery $slider;

    public function mount()
    {
        //
    }

    public function render(): View
    {
        return view('livewire.components.slider');
    }
}
