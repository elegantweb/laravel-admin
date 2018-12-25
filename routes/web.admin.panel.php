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

    Route::get('/notifications', 'NotificationController@index')->name('notifications.index');

});
