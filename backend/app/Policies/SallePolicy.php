<?php

namespace App\Policies;

use App\Http\Resources\UserRessource;
use App\Models\Salle;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SallePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user):bool
    {
        return $user->role_id === 1;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Salle $salle): bool
    {
        return $user->role_id === 1;
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
    public function update(User $user, Salle $salle): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Salle $salle): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Salle $salle): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Salle $salle): bool
    {
        //
    }
}
