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

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

     'facebook' => [
      'client_id' => '2351001985124122',
      'client_secret' => 'f64c4afa131812c5b9a3770a7ac032ea',
      'redirect' => 'http://yata.pe/callback/facebook/',
     ],
     'google' => [
      'client_id' => '221071130653-dp4nue5ckc4ig4qtvr7831kalbdfu08h.apps.googleusercontent.com',
      'client_secret' => 'VXJWRY82jHb-RLiXkFm0JeLS',
      'redirect' => 'http://yata.pe/callback/google/',
     ],
     
];
