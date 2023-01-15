<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $input  = [
            "email" => $request->email,
            "password" => $request->password,
        ];
        $user = User::where("email", $input["email"])->first();
        if (Auth::attempt($input)) {
            $token = $user->createToken("token")->plainTextToken;
            return response()->json([
                "code" => 200,
                "status" => "success",
                "message" => "Login success",
                "token" => $token
            ]);
        }
        else {
            return response()->json([
                            "code" => 401,
                            "status" => "error",
                            "message" => "Login failed"
                        ]);
            }
    }
}