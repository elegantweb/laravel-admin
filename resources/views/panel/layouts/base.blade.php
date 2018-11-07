<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ config('app.name') }} - {{ config('admin.name') }} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="{{ asset('vendor/admin/components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/components/ionicons/dist/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/components/admin-lte/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/components/admin-lte/dist/css/skins/'.config('admin.panel.skin').'.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/css/admin.css') }}">
    @stack('styles')
</head>
<body class="hold-transition {{ config('admin.panel.skin') }} {{ join(config('admin.panel.layout'), ' ') }} @yield('body-class')">
    @include('admin::panel.partials.body')
    <script src="{{ asset('vendor/admin/components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/admin/components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/admin/components/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ asset('vendor/admin/components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/admin/components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/admin/components/admin-lte/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('vendor/admin/js/admin.js') }}"></script>
    @stack('scripts')
</body>
</html>
