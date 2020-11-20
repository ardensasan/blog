@extends('main')
@section('title','| Homepage')
@section('content')

<div class="row-mt-200">
    <div class="col-md-12">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to my blog</h1>
        <p class="lead">Thank you for visiting</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
        </p>
        </div>
    </div>
</div><!-- end of header row -->
<div class="row">
    <div class="col-md-12" style="margin-left: 15px">
        @foreach($posts as $post)
        <div class="post">
            <h3>{{$post->title}}</h3>
            <p>{{substr($post->body, 0, 300)}}{{ strlen($post->body) > 300 ? "...":""}}</p>
            <a href="{{route('blog.single',$post->slug)}}" class="btn btn-primary">Read More</a>
        </div>
        <hr>
        @endforeach
    </div>
</div>
@stop
