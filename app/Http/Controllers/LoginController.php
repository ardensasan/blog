<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['except' => 'getLogout']);
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/');
    }

    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            return redirect('/');
        }
        return redirect()->route('login')->withErrors("Invalid Credentials");
    }
}
