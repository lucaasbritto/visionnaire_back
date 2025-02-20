<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'defaults' => [
        'allowed_origins' => ['http://localhost:4200'], // URL do seu front-end Angular
        'allowed_headers' => ['*'], // Aceitar qualquer cabeçalho
        'allowed_methods' => ['*'], // Aceitar qualquer método (GET, POST, PUT, DELETE)
        'exposed_headers' => [],
        'max_age' => 0,
        'supports_credentials' => false,
    ],

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
