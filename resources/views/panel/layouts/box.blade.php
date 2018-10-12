@extends('admin::panel.layouts.base')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">@yield('box-title')</h3>
        <div class="box-tools pull-right">
            @yield('box-tools')
        </div>
    </div>
    <div class="box-body">
        @yield('box-body')
    </div>
    <div class="box-footer">
        @yield('box-footer')
    </div>
</div>
@endsection
