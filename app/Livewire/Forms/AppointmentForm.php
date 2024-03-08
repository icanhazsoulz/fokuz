<?php

namespace App\Livewire\Forms;

use App\Models\Appointment;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AppointmentForm extends Form
{
    #[Validate('required|string')]
    public string $firstName = '';

    #[Validate('required|string')]
    public string $lastName = '';

    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $phone = '';

    #[Validate('required|string')]
    public string $categoryId = '';

    #[Validate('nullable|string')]
    public string $description = '';

    #[Validate('required|string')]
    public string $clientSourceId = '';

    #[Validate('nullable|integer')]
    public ?int $shelterId = null;

    #[Validate('nullable|string')]
    public string $petName = '';

    #[Validate('nullable|date')]
    public ?string $petDob = null;

    #[Validate('nullable|integer')]
    public ?int $petTypeId = null;

    #[Validate('nullable|string')]
    public ?string $petSex = null;

    #[Validate('nullable|string')]
    public string $petBreed = '';

    #[Validate('nullable|string')]
    public string $petPhoto = '';

    /**
     * @throws ValidationException
     */
    public function store()
    {
//        dd($this->validate());
        $this->validate();
//        dd($this->all());
        Appointment::createAppointment($this->all());
    }
}
