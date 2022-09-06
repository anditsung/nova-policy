<?php

namespace App\Console\Commands;

use App\Models\Permission;
use App\Nova\Permission as PermissionNova;
use App\Nova\Role as RoleNova;
use App\Nova\User as UserNova;
use App\Web;
use Illuminate\Console\Command;

class addPermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:permissions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'add default permissions';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $allPermission = [
            'viewNova',
            'impersonate',
        ];

        $resources = $this->resources();
        $permissions = Web::defaultPermissions();

        foreach ($resources as $resource => $addons) {
            $uriKey = $resource::uriKey();
            foreach ($permissions as $permission) {
                $allPermission[] = $permission . " " . $uriKey;
            }

            // addons
            foreach ($addons as $permission) {
                $attachPermission = 'attach' . $permission . ' ' . $uriKey;
                $detachPermission = 'detach' . $permission . ' ' . $uriKey;
                $allPermission[] = $attachPermission;
                $allPermission[] = $detachPermission;
            }
        }

        $this->addPermission($allPermission);
    }

    public function addPermission($permissions)
    {
        $guard = config('nova.guard') ?: config('auth.defaults.guard');

        foreach ($permissions as $name) {
            $permission = Permission::where('name', $name)->first();
            if (! $permission) {
                Permission::create([
                    'name' => $name,
                    'guard_name' => $guard,
                ]);
            }
        }
    }

    public function resources()
    {
        return [
            UserNova::class => [
                'Role',
                'Permission',
            ],
            RoleNova::class => [
                'User',
                'Permission',
            ],
            PermissionNova::class => [
                'User',
                'Role',
            ],
        ];
    }
}
