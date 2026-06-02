<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {   
        if (!Auth::attempt($request->only('email', 'password'))) 
        {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }

        $user = Auth::user();
        $user->tokens()->delete();
        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json([
            'status' => true,
            'user' => [
                'id' => (string) $user->id, // ✅ convert to string
                'name' => $user->name,
                'email' => $user->email,
            ],
            'token' => $token
        ]);

        // return response()->json([
        //     'status'=>true,
        //     'user' => $user,
        //     'token' => $token
        // ]);
    }
}