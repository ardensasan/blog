@extends('main')
@section('title','| Register')
@section('content')
<div class="row" style="margin-top: 30px">
    <div class="col-md-6" style="left: 25%;">
        <form action="">
            @csrf
            <label for="name">Name: </label>
            <input type="text" name="name" class="form-control">
            <label for="email">Email: </label>
            <input type="email" name="email" class="form-control">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" class="form-control">
            <br>
            <input type="submit" class="btn btn-primary btn-block" value="Register">
        </form>
    </div>
</div>
@stop
