<?php

return [

    'name' => 'Admin',

    'logo-lg' => '<b>Elegant</b> Admin',
    'logo-mini' => '<b>E</b>Ad',

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
        'skin' => null,
        'layout' => ['sidebar-mini', 'layout-fixed'],

        'routes' => [
            'prefix' => '',
            'middleware' => ['admin.auth'],
        ],
    ],

];
