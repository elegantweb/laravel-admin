<div class="content-wrapper">
    @include('admin::panel.partials.content-header')
    <section class="content">
        @include('admin::partials.status')
        @yield('content')
    </section>
</div>
