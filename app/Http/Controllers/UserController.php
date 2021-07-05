<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    
    public $token_name = 'apptoken';

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
        $token = $user->createToken($this->token_name)->plainTextToken;

        $reponse = [
            'user' => $user,
            'token'=> $token
        ];

        return response($reponse, 201);

    }

    public function login(Request $request){

        $fields = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        //check email
        $user = User::where('email', $request->email)->first();

        //check password
        if (! $user || ! Hash::check($request->password, $user->password)) {
            
            return response([
                'errors' => ['invalid_credentials'=>'Invalid credentials, please try again'],
            ], 401);
        }
    
        return $user->createToken($this->token_name)->plainTextToken;

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
