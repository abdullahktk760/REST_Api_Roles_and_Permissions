<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Spatie;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\roleValidation;

class SpatieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('both.dashboard');
    }
    public function role()
    {
        $data = Spatie::all();

        return view('admin.roles')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajax()
    {
        $user = User::all();
        $role = Role::pluck('name');
        $user = $user->map(function ($user) {
            return ['id' => $user->id, 'name' => $user->name, 'email' => $user->email, 'userRoles' => $user->getRoleNames()->implode(', ')];
        });


        return response()->json(['user' => $user, 'role' => $role]);
    }

    public function getRoles()
    {
        $roles = Role::pluck('name');
        return response()->json(['roles' => $roles]);
    }
    public function assignRole(Request $req)
    {
        $user = User::find($req->id)->assignRole($req->role);
        $user->syncRoles($req->role);

        return response()->json("Role Assigned");
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:spaties,email',
            'password' => 'required|min:4|confirmed'
        ]);

        Spatie::create($validated);
        return  redirect()->back()->with('message', 'Data saved Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function createRole(roleValidation $req)
    {

        Role::create($req->all());
        session()->flash('message', 'Role added Successfuly');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spatie $spatie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spatie $spatie)
    {
        //
    }
}
