<?php

Route::get('/', 'Panel\DashboardController@index')->name('dashboard');

Route::get('notifications', 'Panel\NotificationController@index')->name('notifications.index');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
