<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(RegisterRequest $request){
        $user= new User();
        $user->fill($request->all());
        $user->password= Hash::make($request->password);
        $user->save();
        return response()->json($user);
    }
    public function login(UserRequest $request){
        if (Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ])){
            $user=User::where('email',$request->email)->first();
            $user->token=$user->createToken('App')->accessToken;
            return response()->json($user);
        }
        return response()->json(['message'=>'Tài khoản hoặc mật khẩu không đúng'],401);
    }
    public function userInfo(Request $request){
        return response()->json($request->user('api'));
    }
}
