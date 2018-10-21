@extends('admin::panel.layouts.base')

@section('title', trans('admin::messages.notifications'))

@push('breadcrumb')
<li class="active">
    {{ trans('admin::messages.notifications') }}
</li>
@endpush

@section('content')
@component('admin::components.box')
@slot('title', trans('admin::messages.list'))
@slot('bodyClass', 'no-padding')
@slot('body')
<ul class="nav nav-pills nav-stacked">
    @forelse ($notifications as $notification)
        @include("admin::notifications.{$notification->type}")
    @empty
        <li class="nav-text">No notifications.</li>
    @endforelse
</ul>
@endslot
@slot('footer')
{{ $notifications->links('admin::pagination.simple-default') }}
@endslot
@endcomponent
@endsection
