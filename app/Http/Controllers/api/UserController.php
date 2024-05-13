<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        if(User::where('email', $request->email)->first()){
            return response([
                'message' => 'Email already exists',
                'status' => 'failed'
            ], 200);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $token = $user->createToken($request->email)->plainTextToken;

        return response([
            'token' => $token,
            'message' => 'Registration Success',
            'status' => 'success'
        ], 201);
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',

        ]);
        $user = User::where('email', $request->email)->first();
        if($user && Hash::check($request->password, $user->password)){
            $token = $user->createToken($request->email)->plainTextToken;
            return response([
                'token'=>$token,
                'message' => 'Login Success',
                'status'=>'success'
            ], 200);
        }
        return response([
            'message' => 'The Provided Credentials are incorrect',
            'status'=>'failed'
        ], 401);
    }
    public function logout(){
        auth()->user()->tokens()->delete();
        return response([
            'message' => 'Logout Success',
            'status'=>'success'
        ], 200);
    }

    public function gettingUserWithPagnition(Request $request){
        $perPage = $request->query('per_page', 10);
        $sortBy = $request->query('sort_by', 'id'); // Get the 'sort_by' query parameter or use 'id' as the default field to sort by and also use 'name' as parameter
        $sortOrder = $request->query('sort_order', 'asc'); // Get the 'sort_order' query parameter or use 'asc' as the default sort order and also use 'desc' as parameter
        $filter = $request->query('filter'); // Get the 'filter' query parameter

        // Query to fetch users
        $userQuery = User::query();

        // Apply filtering if filter criteria is provided
        if ($filter) {
            $userQuery->where('name', 'like', '%' . $filter . '%')
                      ->orWhere('email', 'like', '%' . $filter . '%');
        }

        // Apply sorting
        $userQuery->orderBy($sortBy, $sortOrder);

        // Paginate the results
        $userPaginated = $userQuery->paginate($perPage);

        return response()->json([
            'user' => $userPaginated,
            'message' => 'Users Data (Paginated, Sorted, and Filtered)',
            'status' => 'success'
        ], 200);
    }



    public function changePassword(Request $request){
        $request->validate([
            'password' => 'required|confirmed',
        ]);
        $loggeduser = auth()->user();
        $loggeduser->password = Hash::make($request->password);
        $loggeduser->save();
        return response([
            'message' => 'Password Changed Successfully',
            'status'=>'success'
        ], 200);
    }

}
