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
        plainTextToken
        $token = $user->createToken('user_token')->plainTextToken();

        $reponse = [
            'user' => $user,
            'token'=> $token
        ];

        return response($reponse, 201);

    }
}
