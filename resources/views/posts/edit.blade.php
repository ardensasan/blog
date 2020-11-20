@extends('main')
@section('title', "| Edit Post")
@section('stylesheets')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@stop
@method('PUT')
@section('content')
<div class="row">
    <div class="col-md-8">
        <h1>Edit Post</h1>
        <hr>
        <form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title" value="{{$post->title}}"required maxlength="255">
            </div>
            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" class="form-control" name="slug" value="{{$post->slug}}"required minlength="5" maxlength="255">
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
                <option value="{{$tag->id}}"{{ in_array($tag->id, $post->tags()->allRelatedIds()->toArray())? "selected":"" }}>{{$tag->name}}</option>
                @endforeach
            </select>
            <br>
            <br>
            <div class="form-group">
                <label for="featured_image">Image:</label>
                <input type="file" name="featured_image" id="fileToUpload">
            </div>

            <div class="form-group">
              <label for="body">Post Body:</label>
              <textarea name="body" cols="30" rows="10" class="form-control" required>{{$post->body}}</textarea>
            </div>
            <input type="submit" id="submit-form" style="visibility: hidden;"/>
          </form>
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
                    <dd>{{date('M j, Y h:i a',strtotime($post->updated_at))}}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('posts.show',$post->id) }}" class="btn btn-danger btn-block">Cancel</a>
                    </div>
                    <div class="col-sm-6">
                        <label for="submit-form"class="btn btn-success btn-block" tabindex="0">Save Changes</label></a>
                    </div>
                </div>
            </div>
        </div>
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

