@extends('main')
@section('title', "| Edit Post")
@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <h1>DELETE THIS COMMENT?</h1>
        <form action="{{route('comments.destroy',$comment->id)}}" method="POST">
            @csrf
            @method('DELETE')

            <p>
                <strong>Name: </strong>{{$comment->name}}
                <br>
                <strong>Email: </strong>{{$comment->email}}
                <br>
                <strong>Comment: </strong>{{$comment->comment}}
            </p>
            <button type="submit" class="btn btn-danger btn-block">Delete Comment</button>
        </form>
    </div>
</div>
@stop
