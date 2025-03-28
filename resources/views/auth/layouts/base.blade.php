@extends('admin::layouts.base')

@push('body-class', ' login-page bg-body-secondary')

@section('content')
    @include('admin::auth.partials.body')
@overwrite
