@extends('main')
@section('title', "| Edit Post")
@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <h1>Edit Comment:</h1>
        <form action="{{route('comments.update',$comment->id)}}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{$comment->name}}" disabled class="form-control">
            <label for="email">Email:</label>
            <input type="text" name="email" value="{{$comment->email}}" disabled class="form-control">
            <label for="comment">Comment:</label>
            <textarea name="comment" id="" cols="30" rows="10" class="form-control">{{$comment->comment}}</textarea>
            <button type="submit" class="btn btn-primary">Update Comment</button>
        </form>
    </div>
</div>
@stop
