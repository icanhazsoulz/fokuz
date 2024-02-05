<?php

namespace App\Livewire\Forms;

use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use App\Models\Message;
use Livewire\Form;

class MessageForm extends Form
{
    #[Validate('required')]
    public string $first_name = '';

    #[Validate('required')]
    public string $last_name = '';

    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required')]
    public string $phone = '';

    public string $message = '';

    /**
     * @throws ValidationException
     */
    public function store()
    {
//        dd($this->validate());
        $this->validate();

        Message::create($this->all());
    }
}
