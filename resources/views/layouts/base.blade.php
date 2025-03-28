<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ config('app.name') }} - {{ config('admin.name') }} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/components/overlayscrollbars/styles/overlayscrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/components/bootstrap-icons/font/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/components/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/components/admin-lte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/css/admin.css') }}">
    @stack('styles')
</head>
<body class="@stack('body-class')">
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ=" crossorigin="anonymous"></script>
    <script src="{{ asset('vendor/admin/components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/admin/components/overlayscrollbars/browser/overlayscrollbars.browser.es6.min.js') }}"></script>
    <script src="{{ asset('vendor/admin/components/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/admin/components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/admin/components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/admin/components/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendor/admin/components/admin-lte/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('vendor/admin/js/admin.js') }}"></script>
    @stack('scripts')
</body>
</html>
