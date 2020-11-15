@extends('main')
@section('title','| Create New Post')
@section('content')
<div class="row justify-content-md-center">
    <div class="col-md-8 col-md-offest-2">
        <h1>Create New Post</h1>
        <hr>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
              <label for="body">Post Body:</label>
              <textarea name="body" cols="30" rows="10" class="form-control">
            </textarea>
            </div>
            <button type="submit" class="btn btn-success btn-block btn-lg">Create Post</button>
          </form>
    </div>
</div>
@endsection
