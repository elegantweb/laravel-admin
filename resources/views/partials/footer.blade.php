<!--begin::Footer-->
<footer class="app-footer">
    <!--begin::To the end-->
    <div class="float-end d-none d-sm-inline">
        <b>{{ trans('admin::messages.version') }}</b>
        {{ config('app.version', '1.0.0') }}
    </div>
    <!--end::To the end-->
    <!--begin::Copyright-->
    {!! trans('admin::messages.copyright', ['date' => date('Y'), 'name' => config('app.name'), 'url' => config('app.url')]) !!}
    <!--end::Copyright-->
</footer>
<!--end::Footer-->
