<?php

namespace App\Livewire\Forms;

use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use App\Models\Order;
use Livewire\Form;

class OrderForm extends Form
{
    #[Validate('required|string')]
    public string $first_name = '';

    #[Validate('required|string')]
    public string $last_name = '';

    #[Validate('required|email|unique:users')]
    public string $email = '';

    #[Validate('required|string')]
    public string $phone = '';

    #[Validate('required|string')]
    public string $theme = '';

    #[Validate('nullable|string')]
    public string $description = '';

    #[Validate('required|string')]
    public string $client_source = '';

    #[Validate('nullable|string')]
    public string $shelter = '';

    /**
     * @throws ValidationException
     */
    public function store()
    {
//        dd($this->validate());
        $this->validate();

        Order::create($this->all());
    }
}
