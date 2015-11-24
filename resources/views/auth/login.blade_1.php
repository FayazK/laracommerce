@extends('plain')

@section('body-class') class="hold-transition login-page" @stop

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{url('home')}}"><b>Admin</b>LTE</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        @include('partials/error')
        <form action="/login" method="post">
            {!! csrf_field() !!}
            <div class="form-group has-feedback">
                <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-6">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Send Password Reset Link</button>
                </div><!-- /.col -->
            </div>
        </form>

        <a href="{{url('login')}}">Login</a><br>
        <a href="{{url('register')}}" class="text-center">Register a new membership</a>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

@endsection