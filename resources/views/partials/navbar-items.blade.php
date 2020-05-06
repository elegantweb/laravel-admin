<li class="dropdown notifications-menu">
    @include('admin::partials.notifications-menu')
</li>

<li>
    <a href="{{ url('/') }}" target="_blank">{{ trans('admin::messages.view_website') }}</a>
</li>

<li class="dropdown user user-menu">
    @include('admin::partials.user-menu')
</li>
