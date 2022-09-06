<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Laravel\Nova\Http\Requests\NovaRequest;

class BasePolicy
{
    use HandlesAuthorization;

    public function uriKey()
    {
        if ($this->resource()) {
            return $this->resource()::uriKey();
        }

        return "kosong";
    }

    public function removeUpdateButtonOnAttach()
    {
        $novaRequest = app(NovaRequest::class);

        return ! $novaRequest->viaResource;
    }

    public function viewAny(User $user)
    {
        $permission = __FUNCTION__ . ' ' . $this->uriKey();
        return $user->hasPermissionTo($permission);
    }

    public function view(User $user, $model)
    {
        $permission = __FUNCTION__ . ' ' . $this->uriKey();
        return $user->hasPermissionTo($permission);
    }

    public function create(User $user)
    {
        $permission = __FUNCTION__ . ' ' . $this->uriKey();
        return $user->hasPermissionTo($permission);
    }

    public function update(User $user, $model)
    {
        $permission = __FUNCTION__ . ' ' . $this->uriKey();
        return $user->hasPermissionTo($permission);
    }

    public function replicate(User $user, $model)
    {
        $permission = __FUNCTION__ . ' ' . $this->uriKey();
        return $user->hasPermissionTo($permission);
    }

    public function delete(User $user, $model)
    {
        $permission = __FUNCTION__ . ' ' . $this->uriKey();
        return $user->hasPermissionTo($permission);
    }

    public function forceDelete(User $user)
    {
        $permission = __FUNCTION__ . ' ' . $this->uriKey();
        return $user->hasPermissionTo($permission);
    }

    public function restore(User $user, $model)
    {
        $permission = __FUNCTION__ . ' ' . $this->uriKey();
        return $user->hasPermissionTo($permission);
    }
}
