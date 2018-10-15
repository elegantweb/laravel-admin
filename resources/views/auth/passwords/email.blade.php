@extends('admin::auth.layouts.base')

@section('title', trans('admin::messages.password_reset'))
@section('description', trans('admin::messages.password_reset_start'))

@section('content')
<form method="POST" action="{{ route('admin.password.email') }}">
    {{ csrf_field() }}

    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
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
                {{ trans('admin::messages.password_reset_send_link') }}
            </button>
        </div>
    </div>
</form>
@endsection
