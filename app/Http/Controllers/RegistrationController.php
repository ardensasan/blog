<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create(){
        return view('registration.register');
    }

    public function store(Request $request){
        $this->validate($request, array(
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' =>'required|min:8|confirmed'
        ));
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        Auth::login($user);
        return redirect('/');
    }
}
