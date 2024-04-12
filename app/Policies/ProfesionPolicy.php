<?php

namespace App\Policies;

use App\Models\Profesion;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProfesionPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): Response
    {
        //
        return $user->hasPermissionTo('ver profesion')
        ? Response::allow()
        : Response::deny('No tienes permiso para ver');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Profesion $profesion): bool
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
    public function update(User $user, Profesion $profesion): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Profesion $profesion): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Profesion $profesion): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Profesion $profesion): bool
    {
        //
    }
}
