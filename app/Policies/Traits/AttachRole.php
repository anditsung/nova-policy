<?php

namespace App\Policies\Traits;

use App\Models\User;
use Laravel\Nova\Http\Requests\NovaRequest;

trait AttachRole
{
    public function attachAnyRole(User $user, $model)
    {
        $permission = 'attachRole ' . $this->uriKey();
        return $user->hasPermissionTo($permission);
    }

    public function attachRole(User $user, $model, $relatedModel)
    {
        $permission = 'attachRole ' . $this->uriKey();
        return $user->hasPermissionTo($permission);
    }

    public function detachRole(User $user, $model, $relatedModel)
    {
        $permission = 'detachRole ' . $this->uriKey();
        return $user->hasPermissionTo($permission);
    }
}
