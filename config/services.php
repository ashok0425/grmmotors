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
    'google' => [
        'client_id' => '690504472584-q0u4jnd5m236b6735q9sd96r1o20k6dt.apps.googleusercontent.com',
        'client_secret' => 'O4UFQ6TkW33TNKXBf8DJu7CL',
        'redirect' => 'https://fastshopnepal.com/auth/google/callback',
    ],
     'facebook' => [
        'client_id' => '1226644051092576',
        'client_secret' => 'e2a8879d44cd94ffc2404c7a7bf7afa8',
        'redirect' => 'https://fastshopnepal.com/auth/facebook/callback',
    ],

];
