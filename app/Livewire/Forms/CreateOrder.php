<?php

namespace App\Livewire\Forms;

use Illuminate\Validation\ValidationException;
use Livewire\Component;

class CreateOrder extends Component
{
    public OrderForm $form;

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
