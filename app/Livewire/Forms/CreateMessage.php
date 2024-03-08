<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class CreateMessage extends Component
{
    public MessageForm $form;

    public function mount()
    {
        if (Auth::check()) {
            $currentUser = Auth::user();
            $this->form->email = $currentUser->email;
            $this->form->phone = $currentUser->phone;
            $this->form->firstName = $currentUser->first_name;
            $this->form->lastName = $currentUser->last_name;
        }
    }
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
