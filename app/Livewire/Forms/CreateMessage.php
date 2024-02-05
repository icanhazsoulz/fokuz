<?php

namespace App\Livewire\Forms;

use Illuminate\Validation\ValidationException;
use Livewire\Component;

class CreateMessage extends Component
{
    public MessageForm $form;

    /**
     * @throws ValidationException
     */
    public function save()
    {
        $this->form->store();

        return $this->redirect('/contact');
    }

    public function render()
    {
        return view('livewire.forms.create-message');
    }
}
