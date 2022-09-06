<?php

namespace App\Policies;

use App\Models\User;
use App\Nova\User as UserResource;
use App\Policies\Traits\AttachPermission;
use App\Policies\Traits\AttachRole;

class UserPolicy extends BasePolicy
{
    use AttachRole;
    use AttachPermission;

    public function resource()
    {
        return UserResource::class;
    }

    public function view(User $user, $model)
    {
        $permission = __FUNCTION__ . " " . $this->uriKey();
        if ($user->hasPermissionTo($permission)) {
            return parent::view($user, $model);
        }
        return $user->id == $model->id;
    }

    public function update(User $user, $model)
    {
        $permission = __FUNCTION__." ".$this->uriKey();
        if ($user->hasPermissionTo($permission)) {
            return parent::update($user, $model);
        }
        return $user->id == $model->id;
    }
}
