@extends('admin::layouts.base')

@push('body-class', ' bg-body-tertiary ' . join(' ', config('admin.panel.layout')))

@section('content')
    @include('admin::partials.body')
@overwrite
