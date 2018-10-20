<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-bell-o"></i>
    @if (count($notifications) > 0)
        <span class="label label-warning">{{ count($notifications) }}</span>
    @endif
</a>

<ul class="dropdown-menu">
    <li class="header">
        {{ trans('admin::messages.notifications_menu_header', ['count' => count($notifications)]) }}
    </li>
    <li>
        <ul class="menu">
            @include('admin::panel.partials.notifications-menu-items')
        </ul>
    </li>
    <li class="footer">
        <a href="{{ route('admin.notifications.index') }}">
            {{ trans('admin::messages.view_all') }}
        </a>
    </li>
</ul>
