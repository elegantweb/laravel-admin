<a href="{{ route('admin.notifications.index') }}">
    <i class="fa fa-bell-o"></i>
    @if ($count > 0)
        <span class="label label-warning">{{ $count }}</span>
    @endif
</a>
