<?php

namespace App\Livewire\Forms;

use App\Models\Shelter;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class CreateOrder extends Component
{
    public OrderForm $form;

    public array $categories = [];
    public array $shelters = [];
    public array $client_sources = [];

    public function mount()
    {
        $this->categories = DB::table('categories')
            ->orderBy('id', 'asc')
            ->pluck('key', 'id')
            ->toArray();

        $this->shelters = DB::table('shelters')
            ->orderBy('id', 'asc')
            ->pluck('name', 'id')
            ->toArray();

        $this->client_sources = DB::table('client_sources')
            ->orderBy('id', 'asc')
            ->pluck('key', 'id')
            ->toArray();
    }

    /**
     * @throws ValidationException
     */
    public function save()
    {
        $this->form->store();

        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.forms.create-order');
    }
}
