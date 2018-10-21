<a href="{{ route('admin.users.notifications.index', [Auth::user()]) }}">
    <i class="fa fa-bell-o"></i>
    @if (count($notifications) > 0)
        <span class="label label-warning">{{ count($notifications) }}</span>
    @endif
</a>
