@extends('main')
@section('title','| Forgot Password')
@section('content')
<div class="row" style="margin-top: 20px">
    <div class="col-md-6" style="left: 25%;">
        <div class="card">
            <div class="card-header">Reset Password</div>
            <div class="card-body">
                <form action="{{route('password.update')}}" method="POST">
                    @csrf
                    <input type="text" name="token" value="{{$token}}" hidden>
                    <label for="email">Email: </label>
                    <input type="email" name="email" class="form-control">
                    <label for="password">Password: </label>
                    <input type="password" name="password" class="form-control">
                    <label for="password_confirmation">Confirm Password: </label>
                    <input type="password" name="password_confirmation" class="form-control">
                    <input type="submit" class="btn btn-primary" style="margin-top: 10px;"value="Reset Password">
                </form>
            </div>
        </div>
    </div>
</div>
@stop
