<div class="login-box">
    @include('admin::auth.partials.logo')
    @include('admin::partials.status')
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">@yield('message')</p>
            @yield('content')
        </div>
    </div>
</div>
