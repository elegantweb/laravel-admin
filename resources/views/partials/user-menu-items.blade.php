<!-- User image -->
<li class="user-header">
    <img src="{{ sprintf('https://www.gravatar.com/avatar/%s?d=mp&s=%s', md5(strtolower(trim(Auth::user()->email))), 90) }}" class="img-circle" alt="User Image">
    <p>
        {{ Auth::user()->name }}
        <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
    </p>
</li>

<!-- Menu Footer-->
<li class="user-footer">
    <div class="text-center">
        <a href="{{ route('admin.logout') }}" class="btn btn-default btn-flat">{{ trans('admin::messages.logout') }}</a>
    </div>
</li>
