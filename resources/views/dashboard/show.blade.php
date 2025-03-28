@extends('admin::layouts.panel')

@section('title', trans('admin::messages.dashboard'))

@push('breadcrumb')
    <li class="breadcrumb-item active">
        {{ trans('admin::messages.dashboard') }}
    </li>
@endpush

@section('content')
    {{ trans('admin::messages.welcome') }}
@endsection
