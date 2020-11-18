<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Pagination\Paginator;

class BlogController extends Controller
{
    public function getIndex(){
        Paginator::useBootstrap();
        $posts = Post::orderBy('id','desc')->paginate(10);
        return view('blog.index')->with('posts',$posts);
     }

    public function getSingle($slug){
       $post = Post::where('slug', $slug)->first();
       return view('blog.single')->with('post',$post);
    }

}
