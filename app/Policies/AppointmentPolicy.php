<?php

namespace App\Policies;

use App\Models\Appointment;
use App\Models\User;
use Filament\Facades\Filament;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class AppointmentPolicy
{
    public function before(): bool
    {
        // TODO: correct for production
        return (Filament::getCurrentPanel()->getId() === 'app' && Auth::user()->hasRole(['client', 'admin']))
            || Auth::user()->hasRole('admin');
    }

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Appointment $appointment): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Appointment $appointment): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Appointment $appointment): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Appointment $appointment): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Appointment $appointment): bool
    {
        //
    }
}
