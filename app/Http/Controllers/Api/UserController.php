<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return response()->json([
            'message' => 'User Added',
            'data' => $user
        ]);
    }


    public function show($id)
    {
        return User::find($id);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->update([

            'name' => $request->name,

            'email' => $request->email,

            'password' => $request->password
        ]);

        return response()->json([
        'message' => 'User Updated',
        'data' => $user
        ]);
    }
}
