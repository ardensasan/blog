@extends('main')
@section('title','| Create New Post')
@section('stylesheets')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@stop
@section('content')
<div class="row justify-content-md-center">
    <div class="col-md-8 col-md-offest-2">
        <h1>Create New Post</h1>
        <hr>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title" required maxlength="255">
            </div>
            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" class="form-control" name="slug" required minlength="5" maxlength="255">
            </div>

            <label for="category_id">Category:</label>
            <select name="category_id" id="" class="form-control">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <br>
            <label for="tags">Tags:</label>
            <select class="js-example-basic-multiple form-control" name="tags[]" multiple="multiple">
                @foreach ($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>
            <br>
            <br>
            <div class="form-group">
              <label for="body">Post Body:</label>
              <textarea name="body" cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success btn-block btn-lg">Create Post</button>
          </form>
    </div>
</div>
@stop

@section('javascript')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>

@stop

