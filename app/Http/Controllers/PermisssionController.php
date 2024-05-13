<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ModuleManagment;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class PermisssionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $permission = Permission::all();
        $permission=$permission->groupBy(function($perm){
            return $perm->module_name;
        });
        $role=Role::all();
        return view('admin.permission', compact('permission','role'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Role $role)
    {
        $rolesName = $role->pluck('name');
        $permission = Permission::all();
        $isAdmin=Auth::user()->role('admin');
        if($isAdmin){
            return response()->json(['roles' => $rolesName, 'permission' => $permission, 'Admin'=>true]);
        }
        return response()->json(['roles' => $rolesName, 'permission' => $permission]);
    }
    public function getPermission($role)
    {
        $role = Role::where('name', $role)->first();

        $permissions = Permission::all();
        $permissionsGrouped = $permissions->groupBy(function ($perm) {
            return $perm->module_name;
        });

        $checkResults = [];

        foreach ($permissionsGrouped as $moduleName => $modulePermissions) {
            foreach ($modulePermissions as $permission) {
                $checkResults[$moduleName][$permission->name] = $role->hasPermissionTo($permission->name);
            }
        }


        return response()->json(['permission' => $checkResults]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }
    public function permissionUpdate(Request $request)
    {
        $role = Role::where('name',($request->role))->first();

        $role->syncPermissions($request->name);

        return response()->json(['Perrmission Assigned']);

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role, string $name)
    {
        $role->findByName($name)->delete();

    }
}
