<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'viewNova',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'impersonate',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'viewAny users',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'view users',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'create users',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'update users',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'replicate users',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'delete users',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'forceDelete users',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'restore users',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'attachRole users',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'detachRole users',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'attachPermission users',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'detachPermission users',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'viewAny roles',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'view roles',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'create roles',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'update roles',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'replicate roles',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'delete roles',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'forceDelete roles',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'restore roles',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'attachUser roles',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'detachUser roles',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'attachPermission roles',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'detachPermission roles',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'viewAny permissions',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'view permissions',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'create permissions',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'update permissions',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'replicate permissions',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'delete permissions',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'forceDelete permissions',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'restore permissions',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'attachUser permissions',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'detachUser permissions',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'attachRole permissions',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'detachRole permissions',
                'guard_name' => 'web',
                'created_at' => '2022-09-06 08:03:04',
                'updated_at' => '2022-09-06 08:03:04',
            ),
        ));
        
        
    }
}