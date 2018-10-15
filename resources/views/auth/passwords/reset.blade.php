@extends('admin::auth.layouts.base')

@section('title', trans('admin::messages.password_reset'))
@section('description', trans('admin::messages.password_reset_start'))

@section('content')
<form method="POST" action="{{ route('admin.password.request') }}">
    {{ csrf_field() }}
    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
            <span class="help-block">
                {{ $errors->first('email') }}
            </span>
        @endif
    </div>

    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" class="form-control" name="password" placeholder="New Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <span class="help-block">
                {{ $errors->first('password') }}
            </span>
        @endif
    </div>

    <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <input type="password" class="form-control" name="password" placeholder="Confirm Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                {{ $errors->first('password_confirmation') }}
            </span>
        @endif
    </div>

    <div class="row">
        <div class="col-xs-6 col-xs-offset-6">
            <button type="submit" class="btn btn-primary btn-block btn-flat">
                {{ trans('admin::messages.password_reset') }}
            </button>
        </div>
    </div>
</form>
@endsection
