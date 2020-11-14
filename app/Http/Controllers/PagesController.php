<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getIndex(){
        return view('pages.welcome');
    }

    public function getAbout(){
        $first = "Arden";
        $last = "Sasan";
        $full = $first." ".$last;
        $email = "Ardnsasa@gmail.com";
        return view('pages.about',['fullname' => $full,'email' => $email]);
    }

    public function getContact(){
        return view('pages.contact');
    }
}
