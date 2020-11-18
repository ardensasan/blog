@extends('main')
@section('title','| Categories')
@section('content')
<div class="row">
    <div class="col-md-8">
        <h1>Tags</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                <tr>
                    <th>{{$tag->id}}</th>
                    <td>{{$tag->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-3" style="margin-top: 20px">
        <div class="card">
            <div class="card-body">
                <form action="{{route('tags.store')}}" method="POST">
                    @csrf
                    <h2>New Tag</h2>
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control">
                    <button type="submit" class="btn btn-primary btn-block" style="margin-top: 20px">Create New Tag</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
