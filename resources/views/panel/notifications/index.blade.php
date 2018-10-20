@extends('admin::panel.layouts.base')

@section('title', trans('admin::messages.notifications'))

@push('breadcrumb')
<li class="active">
    {{ trans('admin::messages.notifications') }}
</li>
@endpush

@section('content')
@component('admin::components.box')
@slot('title', 'All')
@slot('body-class', 'no-padding')
@slot('body')
<ul class="nav nav-pills nav-stacked">
    @foreach ($notifications as $notification)
        @include("admin::notifications.{$notification->type}")
    @endforeach
</ul>
@endslot
@slot('footer')
{{ $notifications->links() }}
@endslot
@endcomponent
@endsection
