<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <img src="{{ sprintf('https://www.gravatar.com/avatar/%s?d=mp&s=%s', md5(strtolower(trim(Auth::user()->email))), 25) }}" class="user-image" alt="User Image">
    <span class="hidden-xs">{{ Auth::user()->name }}</span>
</a>

<ul class="dropdown-menu">
    @include('admin::partials.user-menu-items')
</ul>
