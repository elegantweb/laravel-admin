<?php

Route::group([
    'as' => 'admin.',
    'prefix' => config('admin.routes.prefix'),
    'middleware' => config('admin.routes.middleware'),
], function () {

    require(__DIR__.'/admin.php');

});
