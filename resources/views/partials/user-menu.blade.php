<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
    <img src="{{ asset('vendor/admin/img/user.png') }}" class="user-image rounded-circle shadow" alt="User Image" />
    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
</a>

<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
    @include('admin::partials.user-menu-items')
</ul>
