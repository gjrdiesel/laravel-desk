<?php

return [
    /*
    |--------------------------------------------------------------------------
    | IMAP Host Address
    |--------------------------------------------------------------------------
    */
    'default' => 'default',

    'accounts' => [
        'default' => [
            'host'          => 'mail.example.com',
            'port'          => 993,
            'encryption'    => 'ssl', // Supported: false, 'ssl', 'tls'
            'validate_cert' => true,
            'username'      => 'zalazdi@example.com',
            'password'      => 'PASSWORD',
        ],

        'gmail' => [
            'host'          => 'imap.gmail.com',
            'port'          => 993,
            'encryption'    => 'ssl', // Supported: false, 'ssl', 'tls'
            'validate_cert' => true,
            'username'      => env('GMAIL_USERNAME'),
            'password'      => env('GMAIL_PASSWORD'),
        ],

        'another' => [
            'host'          => '',
            'port'          => 993,
            'encryption'    => false, // Supported: false, 'ssl', 'tls'
            'validate_cert' => true,
            'username'      => '',
            'password'      => '',
        ],
    ],
];
