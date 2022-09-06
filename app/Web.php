<?php

namespace App;

class Web
{
    public static function authGuard()
    {
        return collect(config('auth.guards'))->mapWithKeys(function ($value, $key) {
            return [$key => $key];
        });
    }

    public static function defaultPermissions()
    {
        return [
            "viewAny",
            "view",
            "create",
            "update",
            "replicate",
            "delete",
            "forceDelete",
            "restore",
        ];
    }
}
