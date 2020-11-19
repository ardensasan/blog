@extends('main')
@section('title',"| $tag->name Tag")
@section('content')
<div class="row">
    <h1>{{$tag->name}} Tag</h1>
    <h2><small>{{$tag->posts()->count()}} Posts</small></h2>
    <div class="col-md-2">
        <a href="{{route('tags.edit',$tag->id)}}" class="btn btn-primary">Edit</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Tags</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tag->posts as $post)
                <tr>
                    <th>{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>@foreach($post->tags as $tag)
                        <span class="badge badge-secondary">{{$tag->name}}</span>
                        @endforeach
                    </td>
                    <td><a href="{{route('posts.show',$post->id)}}" class="btn-sm btn-dark">View</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
