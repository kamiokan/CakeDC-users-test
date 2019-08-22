<?php

use Cake\Core\Configure;
use Cake\Routing\Router;

$config = [
    // default configuration used to auto-load the Auth Component, override to change the way Auth works
    'Auth' => [
        'loginAction'    => [
            'plugin'     => 'CakeDC/Users',
            'controller' => 'Users',
            'action'     => 'login',
            'prefix'     => false,
        ],
        'authenticate'   => [
            'all' => [
                'finder' => 'auth',
            ],
            'CakeDC/Auth.ApiKey',
            'CakeDC/Auth.RememberMe',
            'Form',
        ],
        'authorize'      => [
            'CakeDC/Auth.Superuser',
            'CakeDC/Auth.SimpleRbac',
        ],

        // ログイン後
        'loginRedirect'  => [
            'plugin'     => null,
            'controller' => 'AfterLogin',
            'action'     => 'index',
        ],
        // ログアウト後
        'logoutRedirect' => [
            'plugin'     => null,
            'controller' => '/',
            'action'     => 'login',
        ],
        'authError' => "アクセスすることができません",
        "flash" => [
            "key" => "auth",
            "element" =>"error",
            "duplicate"=> false
        ],
    ],
];

return $config;
