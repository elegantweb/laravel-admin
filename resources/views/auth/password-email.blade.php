@extends('admin::auth.layouts.base')

@section('title', trans('admin::messages.reset_password'))
@section('message', trans('admin::messages.reset_password_page_message'))

@section('content')
    @include('admin::auth.forms.password-email')
@endsection
