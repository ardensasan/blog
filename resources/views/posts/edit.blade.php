@extends('main')
@section('title', "| Edit Post")
@section('content')
<br>
<div class="row">
    <div class="col-md-8">
        <form action="{{ route('posts.update',$post->id) }}">
            <label for="title"><strong>Title:</strong></label>
            <input type="text" name="title" value="{{$post->title}}" class="form-control">
            <label for="body" style="margin-top: 30px"><strong>Body:</strong></label>
            <textarea name="" id="" name="body" cols="30" rows="10" class="form-control">{{$post->body}}</textarea>
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
                        <a href="{{ route('posts.update',$post->id) }}" class="btn btn-success btn-block">Save Changes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
