<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    //
    function login(){
        return view('auth.login');
    }

    function register(){
        return view('auth.register');
    }

    function create(Request $request){
        //return $request->Input();

        //validate request
        $request->validate([
            'nama'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:10',
        ]);
    }
}
