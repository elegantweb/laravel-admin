<div class="login-box">
    @include('admin::auth.partials.logo')
    <div class="login-box-body">
        <p class="login-box-msg">@yield('description')</p>
        @include('admin::partials.status')
        @yield('content')
    </div>
</div>
