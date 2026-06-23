<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
   public function login(Request $request)

    {
        $credentials = $request->only('email','password');
        if (!Auth::attempt($credentials)) {
            return response()->json([
                'status'=>false,
                'message'=>'Invalid Credentials'
            ],401);
        }
        $user=Auth::user();
        $token=auth()->login($user);
        return cookie(
            'jwt_token',
            $token,
            60 * 24 * 7,
            '/',
            'school-management.test',
            true,
            true,
            false,
            'None'
        );

        return response()->json([
            'status'=>true,
            'message'=>'Login Successful',
            'user'=>$user
        ])->cookie($cookie);
    }

    public function profile(Request $request)

    {

        $token = $request->cookie('jwt');

        if (!$token) {

            return response()->json([

                'success' => false,

                'message' => 'No token found'

            ], 401);

        }

        try {

            $user = JWTAuth::setToken($token)->authenticate();

            return response()->json([

                'success' => true,

                'user' => $user

            ]);

        } catch (\Exception $e) {

            return response()->json([

                'success' => false,

                'message' => 'Unauthenticated'

            ], 401);

        }

    }

    public function logout()

    {

        try {

            auth()->logout();

        } catch (\Exception $e) {


        }

        return response()->json([

            'success' => true,

            'message' => 'Logout Successful'

        ])->cookie(

            cookie()->forget('jwt')

        );

    }

}
