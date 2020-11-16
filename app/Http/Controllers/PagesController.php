<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getIndex(){
        $post = Post::orderBy('id','desc')->limit(5)->get();
        return view('pages.welcome')->with('posts',$post);
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
