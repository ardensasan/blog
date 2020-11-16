@extends('main')
@section('title', "| View Post")
@section('content')
<br>
<div class="row">
    <div class="col-md-8">
        <h1>{{$post->title}}</h1>
        <p class="lead" style="word-wrap: break-word">{{$post->body}}</p>
    </div>
    <div class="col-md-4">
        <div class="card bg-light">
            <div class="card-body">
                <dl class="dl-horizontal">
                    <dt>URL: </dt>
                    <dd><a href="{{route('blog.single',$post->slug)}}">{{url('blog/'.$post->slug)}}</a></dd>
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
</div>
@stop
