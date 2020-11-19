<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

    public function postContact(Request $request){
        $this->validate($request,array(
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:10'
        ));
        $data =array(
            'email' => $request->email,
            'subject' => $request->subject,
            'message_body' => $request->message
        );
        Mail::send('email.email', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('youremail@here.com');
            $message->subject($data['subject']);
        });
        session()->flash('success', 'Your mail was sent successfully');
        return redirect()->route('contact.view');
    }
}
