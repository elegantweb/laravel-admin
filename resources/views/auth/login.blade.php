@extends('admin::auth.layouts.base')

@section('title', trans('admin::messages.login'))
@section('message', trans('admin::messages.login_page_message'))

@section('content')
<form method="POST" action="{{ route('admin.login') }}">
    {{ csrf_field() }}

    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" name="email" placeholder="{{ trans('admin::messages.email') }}" value="{{ old('email') }}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
            <span class="help-block">
                {{ $errors->first('email') }}
            </span>
        @endif
    </div>

    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" class="form-control" name="password" placeholder="{{ trans('admin::messages.password') }}" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <span class="help-block">
                {{ $errors->first('password') }}
            </span>
        @endif
    </div>

    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    <input type="checkbox" name="remember"{{ old('remember') ? ' checked' : '' }}>
                    {{ trans('admin::messages.rememeber_me') }}
                </label>
            </div>
        </div>
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">
                {{ trans('admin::messages.login') }}
            </button>
        </div>
    </div>

    <a href="{{ route('admin.password.request') }}">
        {{ trans('admin::messages.i_forgot_my_password') }}
    </a>
</form>
@endsection
