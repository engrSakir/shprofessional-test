<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'message' => 'Invalid credential',
            ], 401);
        }
        //Delete previous token
        $user->tokens()->delete();
        // Creating a token without scopes...
        $token = $user->createToken('AuthToken')->accessToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response, 201);
    }

    public function logout(Request $request){
        $request->user()->token()->revoke();
        $user = Auth::user();

        $user->tokens()->delete();

        $response = [
            'message' => 'Successfully Logout',
        ];

        return response($response, 201);
    }
}
