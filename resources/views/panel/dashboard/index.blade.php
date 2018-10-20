@extends('admin::panel.layouts.base')

@section('title', trans('admin::messages.dashboard'))

@push('breadcrumb')
<li class="active">
    {{ trans('admin::messages.dashboard') }}
</li>
@endpush

@section('content')
{{ trans('welcome') }}
@endsection
