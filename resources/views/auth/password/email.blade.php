@extends('main')
@section('title','| Forgot Password')
@section('content')
<div class="row" style="margin-top: 20px">
    <div class="col-md-6" style="left: 25%;">
        <div class="card">
            <div class="card-header">Reset Password</div>
            <div class="card-body">
                @if(session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                @endif
                <form action="{{route('password.email')}}" method="POST">
                    @csrf
                    <label for="email">Email Address: </label>
                    <input type="text" name="email" class="form-control">
                    <input type="submit" class="btn btn-primary" style="margin-top: 10px;"value="Reset Password">
                </form>
            </div>
        </div>
    </div>
</div>
@stop
