@extends('main')
@section('title', "| View Post")
@section('content')
<br>
<div class="row">
    <div class="col-md-8">
        <h1>{{$post->title}}</h1>
        <p class="lead" style="white-space: pre-line">{{$post->body}}</p>
    </div>
    <div class="col-md-4">
        <div class="card bg-light">
            <div class="card-body">
                <dl class="dl-horizontal">
                    <dt>Created At: </dt>
                    <dd>{{date('M j, Y h:i a',strtotime($post->created_at))}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{date('M j, Y h:i a',strtotime($post->created_at))}}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary btn-block">Edit</a>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('posts.destroy',$post->id) }}" class="btn btn-danger     btn-block">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
