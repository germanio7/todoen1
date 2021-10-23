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

    'here_weather' => [
        'api_key' => env('MIX_HERE_WEATHER', 'YOUR_API_KEY')
    ],

    'weatherstack' => [
        'api_key' => env('MIX_WEATHERSTACK', 'YOUR_API_KEY')
    ],

    'newsapi' => [
        'api_key' => env('MIX_NEWSAPI', 'YOUR_API_KEY')
    ],

    'football_data' => [
        'api_key' => env('MIX_FOOTBALL_DATA', 'YOUR_API_KEY')
    ],

    'google_search' => [
        'api_key' => env('MIX_GOOGLE_SEARCH', 'YOUR_API_KEY')
    ]

];
