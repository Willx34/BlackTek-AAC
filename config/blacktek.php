<?php

return [

    /*
    |--------------------------------------------------------------------------
    | BlackTek Configuration
    |--------------------------------------------------------------------------
    |
    | This file is for configuring the BlackTek package for your application.
    | This package provides a set of features and settings to enhance
    | your application's functionality and performance.
    |
    |
    | The configuration options are as follows:
    |
    | - 'server_root': The root directory of your server.
    |
    | Feel free to modify these settings according to your server's
    | requirements.
    |
    */

    'server_root' => env('BLACKTEK_SERVER_ROOT', base_path('blacktek')),

    'outfits_images_url' => env('BLACKTEK_OUTFITS_IMAGES_URL', 'https://outfit-images.ots.me/latest/outfit.php'),

    'characters' => [
        'max_per_account' => 10,
        'new' => [
            'level' => 1,
            'health' => 150,
            'mana' => 0,
            'cap' => 400,
            'soul' => 100,
            'vocations' => [
                // Rookgaard newbie start: vocationless ("Rook"). Vocations chosen
                // on leaving Rookgaard later. (Whole vocation set to be retuned.)
                '0' => 'None',
            ],
            'towns' => [
                '6' => 'Rookgaard',
            ],
            'sex' => [
                '0' => 'female',
                '1' => 'male',
            ],
            'blocked_words' => [
                'gm',
                'admin',
                'tutor',
                'god',
                'gamemaster',
                'administrator',
                'tutor',
                'god',
            ],
        ],
    ],
];
