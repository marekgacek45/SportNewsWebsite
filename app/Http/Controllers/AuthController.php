<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin(){
        return view('pages/login');
    }
    public function showRegister(){
        return view('pages/register');
    }

    public function postRegister(Request $request){
        $request->validate([
            'name'=>'required|min:3|max:255|unique:users',
            'email'=>'required|email|max:255|unique:users',
            'password'=>'required|min:5|confirmed'
        ]);
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        Auth::login($user);
        return back()->with('success,udało się');
    }
}
