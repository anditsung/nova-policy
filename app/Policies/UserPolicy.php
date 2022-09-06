<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('viewAny users');
    }

    public function view(User $user, $model)
    {
        if ($user->id == $model->id) {
            return true;
        }
        return $user->hasPermissionTo('view users');
    }

    public function create(User $user)
    {
        return $user->hasPermissionTo('create users');
    }

    public function update(User $user, $model)
    {
        return $user->hasPermissionTo('update users');
    }

    public function replicate(User $user, $model)
    {
        return $user->hasPermissionTo('replicate users');
    }

    public function delete(User $user, $model)
    {
        return $user->hasPermissionTo('delete users');
    }

    public function forceDelete(User $user)
    {
        return $user->hasPermissionTo('forceDelete users');
    }

    public function restore(User $user, $model)
    {
        return $user->hasPermissionTo('restore users');
    }

    public function attachAnyRole(User $user, $model)
    {
        return $user->hasPermissionTo('attachRole users');
    }

    public function attachRole(User $user, $model, $relatedModel)
    {
        return $user->hasPermissionTo('attachRole users');
    }

    public function detachRole(User $user, $model, $relatedModel)
    {
        return $user->hasPermissionTo('detachRole users');
    }
}
