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

    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $phone = '';

    #[Validate('required|string')]
    public string $category = '';

    #[Validate('nullable|string')]
    public string $description = '';

    #[Validate('required|string')]
    public string $client_source = '';

    #[Validate('nullable|integer')]
    public ?int $shelter_id = null;

    #[Validate('nullable|string')]
    public string $pet_name = '';

    #[Validate('nullable|date')]
    public string $pet_dob = '';

    #[Validate('nullable|integer')]
    public ?int $pet_type_id = null;

    #[Validate('nullable|string')]
    public string $pet_sex = '';

    #[Validate('nullable|string')]
    public string $pet_breed = '';

    #[Validate('nullable|string')]
    public string $pet_photo = '';

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
