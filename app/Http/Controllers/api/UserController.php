<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function createUser() {
        $Newuser = User::create([
            "name" => "anas",
            "email" => "anas@gmail.com",
            "password" => "we297@h"
        ]);
        return $Newuser;
    }
    function register(Request $request){
        $RUser = User::create([
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "password" => bcrypt($request->input('password'))
            // postman post request body
        ]);
        return $RUser;
    }
    function login(Request $request){

        $LoginUser = User::where("email", $request->input('email'))->first();
        // that means select * from users where email = $request->input('email') limit 1


        if(!$LoginUser){
            return response()->json(['message' => 'not email'], 401);
        }

        if(!Hash::check($request->input('password') , $LoginUser->password)){
            return response()->json(['message' => 'not password'], 401);
        }

        $token = $LoginUser->createToken('auth_token')->plainTextToken;
        // createToken() method is used to create a token for the user
        // plainTextToken is used to unencrypted the token

        return response()->json(['token' => $token], 200);
    }
}

// User is a class that extends Model class
// 401 unauthorized