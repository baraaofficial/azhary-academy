<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],


    'facebook' => [
        'client_id'     => '574150493227672',
        'client_secret' => '334707ace029877bca3ba9d554ef8b83',
        'redirect'      => 'https://academic-azher.test/auth/facebook/callback',
    ],
    'twitter' => [
        'client_id'     => 'q4gp3OQgzSvCFsFWpslySfYhN',
        'client_secret' => 'O5KXu8I1gqYUiWEtiieN1ey6yEK6mqrSlo5JvH0P4OJ7L82X0i',
        'redirect'      => 'https://academic-azher.test/auth/twitter/callback',
    ],
    'google' => [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' => 'http://your-callback-url',
    ],
];
