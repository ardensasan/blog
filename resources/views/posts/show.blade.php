@extends('main')
@section('title', "| View Post")
@section('stylesheets')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@stop
@section('content')
<br>
<div class="row">
    <div class="col-md-8">
        <img img src="{{asset('images/'.$post->image)}}" alt="Logo">
        <h1>{{$post->title}}</h1>
        <p class="lead" style="word-wrap: break-word">{{$post->body}}</p>
        <hr>
        <div class="tags">
            <label for="tags">Tags: </label>
            @foreach($post->tags as $tag)
        <span class="badge badge-secondary">{{$tag->name}}</span>
            @endforeach
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-light">
            <div class="card-body">
                <dl class="dl-horizontal">
                    <dt>URL: </dt>
                    <dd><a href="{{route('blog.single',$post->slug)}}">{{url('blog/'.$post->slug)}}</a></dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Category: </dt>
                    <dd>{{$post->category->name}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Created At: </dt>
                    <dd>{{date('M j, Y h:i a',strtotime($post->created_at))}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{date('M j, Y h:i a',strtotime($post->updated_at))}}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary btn-block">Edit</a>
                    </div>
                    <div class="col-sm-6">
                        <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-block">Delete</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('posts.index')}}"style="margin-top: 20px" class="btn btn-secondary btn-block">Show All Posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="comment">
            <h3>Comments:<small> {{$post->comments()->count()}} Total</small></h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name:</th>
                        <th>Email:</th>
                        <th>Comment:</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($post->comments as $comment)
                    <tr>
                        <td>{{$comment->name}}</td>
                        <td>{{$comment->email}}</td>
                        <td>{{$comment->comment}}</td>
                        <td>
                            <a href="{{route('comments.edit',$comment->id)}}" class="btn btn-primary btn-sm"><span class="fa fa-pencil"></span></a>
                        </td>
                        <td>
                            <a href="{{route('comments.destroy',$comment->id)}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
