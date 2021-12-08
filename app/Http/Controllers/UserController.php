<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    function store(Request $request){
        
        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|max:255',
            'password' => 'required|min:8'
        ]);

        $user = User::create($request->all());

        return response()->json([
            'name' =>$user,
            'token' =>$user->createToken($request->email)->plainTextToken

        ]);
    }

    function login(Request $request){

        $request->validate([
            'name' =>'required',
            'email'=> 'required|email',
            'passaword' => 'required'

        ]);

        $user = User:: where('email', $request->email)->first();
        
        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'error' => 'Credenciais invalidas'

            ]);
        }
        
        return response()->json([
            'name' =>$user,
            'token' =>$user->createToken($request->email)->plainTextToken

        ]);
    }
}
