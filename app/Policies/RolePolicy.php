<?php

namespace App\Policies;

use App\Nova\Role as RoleResource;

class RolePolicy extends BasePolicy
{
    public function resource()
    {
        return RoleResource::class;
    }
}
