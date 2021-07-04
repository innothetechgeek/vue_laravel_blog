<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Fecades\Hash;


class UserController extends Controller
{
    public function register(Request $request){

        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
        ]);

        $user = User::where('email', $request->email)->first();
        $token = $user->createToken('apptoken')->plainTextToken;

        $reponse = [
            'user' => $user,
            'token'=> $token
        ];

        return response($reponse, 201);

    }

    public function login(Request $request){

        $fields = $request->validate([
            'email' => 'required|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        //check email
        $user = User::where('email', $request->email)->first();

        //check password
        $token = $user->createToken('apptoken')->plainTextToken;

        $reponse = [
            'user' => $user,
            'token'=> $token
        ];

        return response($reponse, 201);

    }

    public function logout(Request $request) {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
}
