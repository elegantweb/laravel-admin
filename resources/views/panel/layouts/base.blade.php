<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ config('app.name') }} - {{ config('admin.name') }} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('vendor/laravel-admin/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/laravel-admin/node_modules/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/laravel-admin/node_modules/ionicons/dist/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/laravel-admin/node_modules/admin-lte/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/laravel-admin/node_modules/admin-lte/dist/css/skins/'.config('admin.panel.skin').'.min.css') }}">
    @stack('styles')
</head>
<body class="hold-transition {{ config('admin.panel.skin') }} {{ join(config('admin.panel.layout'), ' ') }} @yield('body-class')">
    @include('admin::panel.partials.body')
    <script src="{{ asset('vendor/laravel-admin/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/laravel-admin/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/laravel-admin/node_modules/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ asset('vendor/laravel-admin/node_modules/admin-lte/dist/js/adminlte.min.js') }}"></script>
    @stack('scripts')
</body>
</html>
