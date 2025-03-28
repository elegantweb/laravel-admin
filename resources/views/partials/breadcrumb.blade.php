<ol class="breadcrumb float-sm-end">
    <li class="breadcrumb-item">
        <a href="{{ route('admin.dashboard') }}">
            {{ trans('admin::messages.home') }}
        </a>
    </li>
    @stack('breadcrumb')
</ol>
