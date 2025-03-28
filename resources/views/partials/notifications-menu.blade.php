<a class="nav-link" href="{{ route('admin.notifications.index') }}">
    <i class="bi bi-bell-fill"></i>
    @if ($count > 0)
        <span class="navbar-badge badge text-bg-warning">{{ $count }}</span>
    @endif
</a>
