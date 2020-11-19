@extends('main')
@section('title',"| $tag->name Tag")
@section('content')
<div class="row">
    <div class="col-md-8 float-left">
        <h1>{{$tag->name}} Tag</h1>
        <h2><small>{{$tag->posts()->count()}} Posts</small></h2>
    </div>
    <div class="col-md-4 float-right">
        <form action="{{route('tags.destroy',$tag->id)}}" method="POST">
            <div class="row">
                <div class="col">
                    <a href="{{route('tags.edit',$tag->id)}}" class="btn btn-primary btn-block">Edit</a>
                </div>
                <div class="col">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger form-control">Delete</button>
                </div>
              </div>
        </form>
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
