@extends('admin::layouts.base')

@section('body-class', join(' ', [...config('admin.panel.layout'), 'bg-body-tertiary']))

@section('content')
    @include('admin::partials.body')
@overwrite
