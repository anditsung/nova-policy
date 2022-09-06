<?php

namespace App\Policies\Traits;

use App\Models\User;

trait AttachUser
{
    public function attachAnyUser(User $user, $model)
    {
        $permission = 'attachUser ' . $this->uriKey();
        return $user->hasPermissionTo($permission);
    }

    public function attachUser(User $user, $model, $relatedModel)
    {
        $permission = 'attachUser ' . $this->uriKey();
        return $user->hasPermissionTo($permission);
    }

    public function detachUser(User $user, $model, $relatedModel)
    {
        $permission = 'detachUser ' . $this->uriKey();
        return $user->hasPermissionTo($permission);
    }
}
