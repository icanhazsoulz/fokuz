<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class CreateAppointment extends Component
{
    public AppointmentForm $form;

    public string $placeholder = '';
    public array $categories = [];
    public array $shelters = [];
    public array $petTypes = [];
    public array $clientSources = [];

    public function mount()
    {
        if (Auth::check()) {
            $currentUser = Auth::user();
            $this->form->email = $currentUser->email;
            $this->form->phone = $currentUser->phone;
            $this->form->firstName = $currentUser->first_name;
            $this->form->lastName = $currentUser->last_name;
        }

        $this->categories = DB::table('categories')
            ->orderBy('id', 'asc')
            ->pluck('key', 'id')
            ->toArray();

        $this->shelters = DB::table('shelters')
            ->orderBy('id', 'asc')
            ->pluck('name', 'id')
            ->toArray();

        $this->clientSources = DB::table('client_sources')
            ->orderBy('id', 'asc')
            ->pluck('key', 'id')
            ->toArray();

        $this->petTypes = DB::table('types')
            ->orderBy('id', 'asc')
            ->pluck('key', 'id')
            ->toArray();
    }

    public function selectAddress()
    {
        $this->form->address = '';
        if ($this->form->categoryId == 1) {
            $this->form->address =  'Werdohl, Ruppenhahn 40';
        } else {
            $this->placeholder = 'Please enter your address';
        }
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
        return view('livewire.forms.create-appointment');
    }
}
