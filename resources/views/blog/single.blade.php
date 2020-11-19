@extends('main')
@section('title', " | $post->title")
@section('content')
<div class="row" style="margin-top: 30px">
    <div class="col-md-12">
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>
        <hr>
    <p>Posted In: {{$post->category->name}}</p>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        @foreach($post->comments as $comment)
        <div class="comment">
            <p><strong>Name: </strong>{{$comment->name}}</p>
            <label for="comment"><strong>Comment:</strong></label>
            <p>{{$comment->comment}}</p>
            <br>
        </div>
        @endforeach
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="{{route('comments.store',$post->id)}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="email">Email:</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="comment">Comment:</label>
                    <textarea name="comment" id="" cols="30" rows="10" class="form-control" maxlength="2000"></textarea>
                    <br>
                    <button type="submit" class="btn btn-success btn-block">Add Comment</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop
