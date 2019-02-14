<?php

Route::group([
    'as' => 'admin.',
    'prefix' => config('admin.routes.prefix'),
    'middleware' => config('admin.routes.middleware'),
    'namespace' => 'Elegant\Admin\Http\Controllers',
], function () {

    require('web.admin.php');

});
