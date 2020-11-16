@extends('main')
@section('title','| Homepage')
@section('content')

<div class="row-mt-200">
    <div class="col-md-12">
    <div class="jumbotron">
        <h1 class="display-4">Welcom to my blog</h1>
        <p class="lead">Thank you for visiting</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
        </p>
        </div>
    </div>
</div><!-- end of header row -->
<div class="row">
    <div class="col-md-8">
        @foreach($posts as $post)
        <div class="post">
            <h3>{{$post->title}}</h3>
            <p>{{substr($post->body, 0, 300)}}{{ strlen($post->body) > 300 ? "...":""}}</p>
            <a href="" class="btn btn-primary">Read More</a>
        </div>
        <hr>
        @endforeach
    </div>
    <div class="col-md-3 col-md-offset-1">
        <h1>Sidebar</h1>
    </div>
</div>
@stop
