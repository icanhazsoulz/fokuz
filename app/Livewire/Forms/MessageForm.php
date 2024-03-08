<?php

namespace App\Livewire\Forms;

use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use App\Models\Message;
use Livewire\Form;

class MessageForm extends Form
{
    #[Validate('required|string')]
    public string $firstName = '';

    #[Validate('required|string')]
    public string $lastName = '';

    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $phone = '';

    #[Validate('required|string|max:1000')]
    public string $message = '';

    /**
     * @throws ValidationException
     */
    public function store()
    {
//        dd($this->validate());
        $this->validate();

        Message::createMessage($this->all());
    }
}
