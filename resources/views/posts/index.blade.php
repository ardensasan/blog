@extends('main')
@section('title', "| All Posts")
@section('content')
<div class="row" style="margin-top: 50px">
    <div class="col-md-9">
        <h1>All Posts</h1>
    </div>
    <div class="col-md-3">
    <a href="{{route('posts.create')}}" class="btn btn-primary btn-lg btn-block">Create New Post</a>
    </div>
    <div class="col-md-12">
        <hr>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created At</th>
                <th></th>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <th>{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{substr($post->body,0,50)}} {{ strlen($post->body) > 50 ? "...":"" }}</td>
                    <td>{{date('M j, Y h:i a',strtotime($post->created_at))}}</td>
                    <td><a href="{{route('posts.show',$post->id)}}" class="btn btn-dark">View</a>
                        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-dark">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
