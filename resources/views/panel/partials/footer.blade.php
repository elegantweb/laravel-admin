<footer class="main-footer">
    <div class="pull-right hidden-xs"><b>{{ trans('admin::messages.version') }}</b> {{ config('app.version', '1.0.0') }}</div>
    <strong>{{ trans('admin::messages.copyright', ['date' => date('Y')]) }}</strong>{{ trans('admin::messages.rights') }}
</footer>
