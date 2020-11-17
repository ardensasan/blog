@extends('main')
@section('title','| Login')
@section('content')
<div class="row" style="margin-top: 20px">
    <div class="col-md-6" style="left: 25%;">
        <form action="{{route('login')}}" method="POST">
            @csrf
            <label for="email">Email: </label>
            <input type="email" name="email" class="form-control">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control">
            <input type="checkbox" name="remember">
            <label for="remember">Remember Me</label>
            <br>
            <input type="submit" class="btn btn-primary btn-block" value="Login">
        </form>
    </div>
</div>
@stop
