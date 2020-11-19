@extends('main')
@section('title','| Edit Tag')
@section('content')
    <form action="{{route('tags.update',$tag->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="tag">Tag Name</label>
        <input type="text" name="name" class="form-control" value="{{$tag->name}}">
        <button type="submit" class="btn btn-success">Save Changes</button>
    </form>
@stop
