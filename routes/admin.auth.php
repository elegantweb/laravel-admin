<?php

Route::group([
    'namespace' => 'Elegant\Admin\Http\Controllers\Auth',
], function () {

    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');

    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset');

});

Route::group([
    'namespace' => config('admin.auth.routes.namespace'),
], function () {

    require(base_path('routes/admin.auth.php'));

});
