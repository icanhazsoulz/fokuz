<?php

namespace App\Livewire\Forms;

use App\Models\Shelter;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class CreateOrder extends Component
{
    public OrderForm $form;

    public array $shelters = [];

    public function mount()
    {
        $this->shelters = DB::table('shelters')->get()->toArray();
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
