<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],



    // Socialite Providers...

    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'redirect' => env('FACEBOOK_CLIENT_CALLBACK')
    ],

    'twitter' => [
        'client_id' => 'jCJyukj0yJoPg1cLBAtwRIUDx',
        'client_secret' => 'uJyNFQ5p2MpcsRvFWEQuKxhVxaWMfplJ1gerq64yMWkOSDcOBw',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],


    'google' => [
        'client_id' => '155771718298-nm0l9l99omu9aj2batk8osibd74s6r4t.apps.googleusercontent.com',
        'client_secret' => '3IM6Vh9AfUiRyMpFR9xgEWv3',
        'redirect' => 'http://localhost:8000/callback/google',
    ],

];
