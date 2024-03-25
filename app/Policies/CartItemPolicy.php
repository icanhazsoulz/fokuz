<?php

namespace App\Policies;

use App\Models\CartItem;
use App\Models\User;
use Filament\Facades\Filament;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class CartItemPolicy
{
    public function before(): bool
    {
        // TODO: correct for production
        return Filament::getCurrentPanel()->getId() === 'app' && Auth::user()->hasRole('client');
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
    public function view(User $user, CartItem $cartItem): bool
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
    public function update(User $user, CartItem $cartItem): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CartItem $cartItem): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CartItem $cartItem): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, CartItem $cartItem): bool
    {
        //
    }
}
