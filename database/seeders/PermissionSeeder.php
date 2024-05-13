<?php

namespace Database\Seeders;

use App\Models\ModuleManagment;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::Create(['name' => 'add roles', 'guard_name' => 'web', 'module_name'=>'user roles']);
        Permission::Create(['name' => 'edit roles', "guard_name" => "web", 'module_name'=>'user roles']);
        Permission::Create(['name' => 'read roles', "guard_name" => "web", 'module_name'=>'user roles']);
        Permission::Create(['name' => 'delete roles', "guard_name" => "web", 'module_name'=>'user roles']);

        Permission::Create(['name' => 'add permissions', 'guard_name' => 'web', 'module_name'=>'role permissions']);
        Permission::Create(['name' => 'edit permissions', "guard_name" => "web", 'module_name'=>'role permissions']);
        Permission::Create(['name' => 'read permissions', "guard_name" => "web", 'module_name'=>'role permissions']);
        Permission::Create(['name' => 'delete permissions', "guard_name" => "web", 'module_name'=>'role permissions']);

    }
}
