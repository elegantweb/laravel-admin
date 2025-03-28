<!--begin::User Image-->
<li class="user-header text-bg-primary">
    <img src="{{ asset('vendor/admin/img/user.png') }}" class="rounded-circle shadow" alt="User Image" />
    <p>
        {{ Auth::user()->name }}
        <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
    </p>
</li>
<!--end::User Image-->

<!--begin::Menu Footer-->
<li class="user-footer text-center">
    <a href="{{ route('admin.logout') }}" class="btn btn-default btn-flat">Sign out</a>
</li>
<!--end::Menu Footer-->
