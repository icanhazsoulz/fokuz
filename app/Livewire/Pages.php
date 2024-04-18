<?php

namespace App\Livewire;

use App\Models\Gallery;
use App\Models\Page;
use Illuminate\Support\Facades\View;
use Livewire\Component;

class Pages extends Component
{
    public string $slug;

    public ?Gallery $slider;

    public function mount($page = '')
    {
        $this->slug = $page ?: 'home';

        $this->slider = $this->setSlider();
//        dd($this->slider);
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        $prefix = 'livewire.pages.';

        $prefix = in_array(
            $this->slug,
            [
                'login',
                'register',
                'forgot-password'
            ]
        ) ? $prefix . 'auth.' : $prefix;

        $view = $prefix . $this->slug;

        $view = View::exists($view) ? $view : 'livewire.404';

//        abort_unless(View::exists($view), 404);

        return view($view);
    }

    protected function setSlider(): Gallery | null
    {
        $filamentPage = Page::query()->where('slug', $this->slug)->first();

        if ($filamentPage) {
            return Gallery::find($filamentPage->gallery_id);
        }

        return null;
    }
}
