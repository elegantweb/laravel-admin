<div class="login-box">
    @include('admin::auth.partials.logo')
    <div class="login-box-body">
        <p class="login-box-msg">@yield('message')</p>
        @include('admin::partials.status')
        @yield('content')
    </div>
</div>
