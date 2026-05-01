<?php

use App\Models\User;
use App\Models\StudentAccount;

return [

    /*
    |--------------------------------------------------------------------------
    | DEFAULTS
    |--------------------------------------------------------------------------
    */
    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    /*
    |--------------------------------------------------------------------------
    | GUARDS
    |--------------------------------------------------------------------------
    */
    'guards' => [

        // USER (admin, staff, teacher)
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        // STUDENT
        'student' => [
            'driver' => 'session',
            'provider' => 'students',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | PROVIDERS
    |--------------------------------------------------------------------------
    */
    'providers' => [

        // USER
        'users' => [
            'driver' => 'eloquent',
            'model' => User::class,
        ],

        // STUDENT ACCOUNT
        'students' => [
            'driver' => 'eloquent',
            'model' => StudentAccount::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | PASSWORD RESET
    |--------------------------------------------------------------------------
    */
    'passwords' => [

        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],

        'students' => [
            'provider' => 'students',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | PASSWORD TIMEOUT
    |--------------------------------------------------------------------------
    */
    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];