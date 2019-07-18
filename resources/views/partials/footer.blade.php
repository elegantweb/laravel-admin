<footer class="main-footer">
    <div class="pull-right hidden-xs"><b>{{ trans('admin::messages.version') }}</b> {{ config('app.version', '1.0.0') }}</div>
    {!! trans('admin::messages.copyright', ['date' => date('Y')]) !!}
</footer>
