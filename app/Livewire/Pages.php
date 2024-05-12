<?php

namespace App\Livewire;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Post;
use App\Models\Price;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\View;
use Livewire\Component;

class Pages extends Component
{
    public string $slug;
    public ?string $title;
    public ?string $subtitle;
    public Collection $prices;
    public Collection $events;

    public ?Gallery $slider;
    public Collection $featuredPosts;

    public function mount($page = '')
    {
        $this->slug = $page ?: 'home';
        $this->title = \DB::table('pages')->where('slug', $this->slug)->value('title');
        $this->subtitle = \DB::table('pages')->where('slug', $this->slug)->value('subtitle');

        $this->slider = $this->setSlider();
        $this->featuredPosts = Post::where('featured', 1)->get();
//        dd($this->slider);

        $this->prices = Price::query()->where('status', 1)->get();
        $this->events = Event::query()->get();
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
