@extends('main')
@section('title','| Blog')
@section('content')
<div class="row" style="margin-top: 30px">
    <div class="col-md-12">
        <h1>Blog</h1>
    </div>
</div>
    @foreach($posts as $post)
    <div class="row" style="margin-top: 30px">
        <div class="col-md-12">
            <h3>{{$post->title}}</h3>
            <h6>Published: {{ date('M j, Y', strtotime($post->created_at))}}</h6>
            <p>{{substr($post->body,0,255)}} {{ strlen($post->body) > 250 ? "...":""}}</p>
            <a href="{{route('blog.single', $post->slug)}}" class="btn btn-primary">Read More</a>
        </div>
    </div>
    <hr>
    @endforeach
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@stop
