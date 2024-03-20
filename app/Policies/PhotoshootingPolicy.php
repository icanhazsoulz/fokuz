<?php

namespace App\Policies;

use App\Models\Photoshooting;
use App\Models\User;
use Filament\Facades\Filament;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class PhotoshootingPolicy
{
    public function before(): bool
    {
        return (Filament::getCurrentPanel()->getId() === 'app' && Auth::user()->hasRole(['admin', 'client']))
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
    public function view(User $user, Photoshooting $photoshooting): bool
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
    public function update(User $user, Photoshooting $photoshooting): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Photoshooting $photoshooting): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Photoshooting $photoshooting): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Photoshooting $photoshooting): bool
    {
        //
    }
}
