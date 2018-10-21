@extends('admin::panel.layouts.base')

@section('title', trans('admin::messages.notifications'))

@push('breadcrumb')
<li class="active">
    {{ trans('admin::messages.notifications') }}
</li>
@endpush

@section('content')
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs" role="tablist">
        <li class="{{ request()->input('all') ? '' : 'active' }}">
            <a href="{{ route('users.notifications.index') }}">
                Unread
            </a>
        </li>
        <li class="{{ request()->input('all') ? 'active' : '' }}">
            <a href="{{ route('users.notifications.index', ['all' => '1']) }}">
                All
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active">
            <ul class="notifications-nav nav nav-pills nav-stacked">
                @forelse ($notifications as $notification)
                    <li class="{{ $notification->unread ? 'unread' : '' }}">
                        @include("admin::notifications.{$notification->type}")
                    </li>
                @empty
                    <li class="nav-text">
                        No notifications.
                    </li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection
