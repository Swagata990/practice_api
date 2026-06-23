<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;
use App\Http\Resources\SuccessResource;
use App\Http\Resources\SuccessCollection;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //Show All
    public function index()
    {
       $users=User::all();

       return new SuccessCollection(
        $users,
       'Users fetched successfully',
        200
       );
    }

    //Save one
    public function store(UserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return new SuccessResource(
            $user,
            'User Added Successfully',
            201
        );       
    }

    //Show one
    public function show($id)
    {
        return User::find($id);
    }

    //update one
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
        'message' => 'User Updated',
        'data' => $user
        ]);
    }

    //Delete
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return (new SuccessResource(
            [],
            'Student Deleted Successfully',
            204
        ))->response()->setStatusCode(204);
    }

    /* public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = auth()->attempt($credentials))
        {
            return response()->json([
                'message' => 'Invalid Credentials'
            ], 401);
        }

        $cookie = cookie(

            'jwt_token', 
             $token,
             60
        );


        return response()->json([
            'message' => 'Login Success',
            'token' => $token
        ])->withCookie($cookie);
    } */
}

