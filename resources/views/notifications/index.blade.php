@extends('admin::layouts.base')

@section('title', trans('admin::messages.notifications'))

@push('breadcrumb')
<li class="active">
    {{ trans('admin::messages.notifications') }}
</li>
@endpush

@section('content')
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs" role="tablist">
        <li class="{{ $all ? '' : 'active' }}">
            <a href="{{ route('admin.notifications.index') }}">
                {{ trans('admin::messages.unread') }}
            </a>
        </li>
        <li class="{{ $all ? 'active' : '' }}">
            <a href="{{ route('admin.notifications.index', ['all' => '1']) }}">
                {{ trans('admin::messages.all') }}
            </a>
        </li>
    </ul>
    <div class="tab-content no-padding">
        <div class="tab-pane active">
            <ul class="notifications-nav nav nav-pills nav-stacked">
                @forelse ($notifications as $notification)
                    <li>@include(sprintf('admin::notifications.%s', Str::kebab(class_basename($notification->type))))</li>
                @empty
                    <li class="nav-text">No notifications.</li>
                @endforelse
            </ul>
        </div>
    </div>
    @if ($all)
    <div class="tab-content">
        <div class="tab-pane active">
            <div class="clearfix">
                {{ $notifications->links('admin::pagination.simple-default') }}
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
