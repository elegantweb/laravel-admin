<?php

Route::group([
    'namespace' => 'Elegant\Admin\Controllers\Auth',
], function () {

    Route::get('logout', 'LoginController@logout')->name('logout');

});

Route::group([
    'namespace' => 'Elegant\Admin\Controllers\Panel',
], function () {

    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::get('/notifications', 'NotificationController@index')->name('notifications');

});

Route::group([
    'namespace' => config('admin.panel.routes.namespace'),
], function () {

    if (file_exists($path = base_path('routes/web.admin.panel.php'))) {
        require($path);
    }

});
