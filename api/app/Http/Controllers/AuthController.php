<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return response()->json([
            "message" => "Berhasil Mendaftar",
            "code" => 200,
            "data" => $user
        ]);
    }
    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $token = $user->createToken('authToken')->accessToken;

            return response()->json([
                "message" => "Berhasil Login",
                "code" => 200,
                "token" => $token
            ]);
        }

        return response()->json([
            "message" => "Email atau Password Salah",
            "code" => 401
        ]);
    }

    public function logout(Request $request){
        $user = $request->user();

        Auth::logout();
        
        return response()->json([
            "message" => "Berhasil Logout",
            "code" => 200,
        ]);
    }
}
