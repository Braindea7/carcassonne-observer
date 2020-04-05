<?php

return [

    'default' => env('DB_DEFAULT_CONNECTION', 'mysql'),
    'migrations' => 'migrations',
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_MYSQL_HOST', 'localhost'),
            'port' => env('DB_MYSQL_PORT', '3306'),
            'database' => env('DB_MYSQL_DATABASE', 'forge'),
            'username' => env('DB_MYSQL_USERNAME', 'forge'),
            'password' => env('DB_MYSQL_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

    ],
];