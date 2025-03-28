@extends('admin::layouts.panel')

@section('title', trans('admin::messages.notifications'))

@push('breadcrumb')
    <li class="breadcrumb-item active">
        {{ trans('admin::messages.notifications') }}
    </li>
@endpush

@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a href="{{ route('admin.notifications.index') }}" class="nav-link {{ $all ? '' : 'active' }}">
                {{ trans('admin::messages.unread') }}
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.notifications.index', ['all' => '1']) }}" class="nav-link {{ $all ? 'active' : '' }}">
                {{ trans('admin::messages.all') }}
            </a>
        </li>
    </ul>

    <ul class="list-group mt-2">
        @forelse ($notifications as $notification)
            <li class="list-group-item">
                @include(sprintf('admin::notifications.%s', Str::kebab(class_basename($notification->type))))
            </li>
        @empty
            <li class="list-group-item">
                No notifications.
            </li>
        @endforelse
    </ul>

    @if ($all)
        {{ $notifications->links('admin::pagination.simple-default') }}
    @endif
@endsection
