<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use function Symfony\Component\String\b;

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
            $this->form->name = $currentUser->name;
        }

        $this->placeholder = __('ui.contact_form.appointment.address_empty');

        $this->categories = DB::table('categories')
            ->orderBy('id', 'asc')
            ->pluck('slug', 'id')
            ->toArray();

        $this->shelters = DB::table('shelters')
            ->orderBy('id', 'asc')
            ->pluck('name', 'id')
            ->toArray();

        $this->clientSources = DB::table('client_sources')
            ->orderBy('id', 'asc')
            ->pluck('slug', 'id')
            ->toArray();

        $this->petTypes = DB::table('types')
            ->orderBy('id', 'asc')
            ->pluck('name')
            ->toArray();
    }

    public function selectAddress()
    {
        $this->form->address = '';

        switch ($this->form->categoryId) {
            case null:
                $this->placeholder = __('ui.contact_form.appointment.address_empty');
                break;
            case 1:
                $this->form->address =  'Werdohl, Ruppenhahn 40';
                break;
            default:
                $this->placeholder = __('ui.contact_form.appointment.address_prompt');
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
