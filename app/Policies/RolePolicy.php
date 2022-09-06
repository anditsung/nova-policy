<?php

namespace App\Policies;

use App\Models\User;

class RolePolicy
{
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('viewAny roles');
    }

    public function view(User $user, $model)
    {
        return $user->hasPermissionTo('view roles');
    }

    public function create(User $user)
    {
        return $user->hasPermissionTo('create roles');
    }

    public function update(User $user, $model)
    {
        return $user->hasPermissionTo('update roles');
    }

    public function replicate(User $user, $model)
    {
        return $user->hasPermissionTo('replicate roles');
    }

    public function delete(User $user, $model)
    {
        return $user->hasPermissionTo('delete roles');
    }

    public function forceDelete(User $user)
    {
        return $user->hasPermissionTo('forceDelete roles');
    }

    public function restore(User $user, $model)
    {
        return $user->hasPermissionTo('restore roles');
    }

    public function attachAnyUser(User $user, $model)
    {
        return $user->hasPermissionTo('attachUser roles');
    }

    public function attachUser(User $user, $model, $relatedModel)
    {
        return $user->hasPermissionTo('attachRole users');
    }

    public function detachUser(User $user, $model, $relatedModel)
    {
        return $user->hasPermissionTo('detachUser roles');
    }
}
