<a href="{{ route('admin.notifications.index') }}">
    <i class="fa fa-bell-o"></i>
    @if (count($notifications) > 0)
        <span class="label label-warning">{{ count($notifications) }}</span>
    @endif
</a>
