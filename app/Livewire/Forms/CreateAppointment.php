<?php

namespace App\Livewire\Forms;

use App\Models\Shelter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class CreateAppointment extends Component
{
    public AppointmentForm $form;

    // Authorized user wants to create an order for another - new client
    public bool $newClient = false;

    // If display the client data block
    public string $displayClientBlock = '';

    public array $categories = [];
    public array $shelters = [];
    public array $petTypes = [];
    public array $clientSources = [];

    public function mount()
    {
        $this->displayClientBlock = Auth::check() ? 'hidden' : '';

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

    public function showClientBlock()
    {
        $this->displayClientBlock = $this->newClient ? '' : 'hidden';
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
