<?php

Route::get('/', 'DashboardController@index')->name('dashboard');

Route::get('notifications', 'NotificationController@index')->name('notifications.index');

Route::get('logout', 'LoginController@logout')->name('logout');
