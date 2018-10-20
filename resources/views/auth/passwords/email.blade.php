@extends('admin::auth.layouts.base')

@section('title', trans('admin::messages.reset_password'))
@section('message', trans('admin::messages.reset_password_page_message'))

@section('content')
<form method="POST" action="{{ route('admin.password.email') }}">
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

    <div class="row">
        <div class="col-xs-8 col-xs-offset-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">
                {{ trans('admin::messages.send_rest_password_link') }}
            </button>
        </div>
    </div>
</form>
@endsection
