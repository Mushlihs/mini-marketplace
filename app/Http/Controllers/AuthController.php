<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Login(Request $request)
    {
        $form = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($form)) { } else { }
    }
    public function Register(Request $request)
    {
        $this->$request->validate([
            "username" => "required|string"
        ]);
    }
    public function Logout(Request $request)
    { }
}
