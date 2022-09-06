<?php

namespace App\Policies\Traits;

use App\Models\User;

trait AttachPermission
{
    public function attachAnyPermission(User $user, $model)
    {
        $permission = 'attachPermission ' . $this->uriKey();
        return $user->hasPermissionTo($permission);
    }

    public function attachPermission(User $user, $model, $relatedModel)
    {
        $permission = 'attachPermission ' . $this->uriKey();
        return $user->hasPermissionTo($permission);
    }

    public function detachPermission(User $user, $model, $relatedModel)
    {
        $permission = 'detachPermission ' . $this->uriKey();
        return $user->hasPermissionTo($permission);
    }
}
