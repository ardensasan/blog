@extends('main')
@section('title', " | $post->title")
@section('content')
<div class="row" style="margin-top: 30px">
    <div class="col-md-12">
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>
    </div>
</div>
@stop