@extends('main')
@section('title','| Categories')
@section('content')
<div class="row">
    <div class="col-md-8">
        <h1>Categories</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <th>{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-3" style="margin-top: 20px">
        <div class="card">
            <div class="card-body">
                <form action="{{route('categories.store')}}" method="POST">
                    @csrf
                    <h2>New Category</h2>
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control">
                    <button type="submit" class="btn btn-primary btn-block" style="margin-top: 20px">Create New Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
