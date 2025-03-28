<?php

return [

    'name' => 'Admin',

    'brand_img' => 'vendor/admin/img/logo.png',
    'brand_text' => 'Elegant Admin',

    'routes' => [
        'prefix' => env('ADMIN_URL_PREFIX', 'admin'),
        'middleware' => ['web'],
    ],

    'auth' => [
        'guard' => 'admin',
        'password' => 'users',

        'routes' => [
            'prefix' => 'auth',
            'middleware' => ['admin.guest'],
        ],
    ],

    'panel' => [
        'layout' => ['layout-fixed', 'sidebar-expand-lg', 'sidebar-mini'],

        'routes' => [
            'prefix' => '',
            'middleware' => ['admin.auth'],
        ],
    ],

];
