@extends('admin::auth.layouts.base')

@section('title', trans('admin::messages.login'))
@section('message', trans('admin::messages.login_page_message'))

@section('content')
    @include('admin::auth.forms.login')
    <hr>
    <p class="mb-0">
        <a href="{{ route('admin.password.request') }}">
            {{ trans('admin::messages.i_forgot_my_password') }}
        </a>
    </p>
@endsection
