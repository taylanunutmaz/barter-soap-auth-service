<?php

return [
    // Service configurations.
    'services' => [
        'auth' => [
            'name' => 'Auth',
            'class' => \App\Http\Controllers\AuthController::class,
            'exceptions' => [
                'Exception'
            ],
            'types' => [
                'user' => \App\Types\User::class,
            ],
            'strategy' => 'ArrayOfTypeComplex',
            'headers' => [
                'Cache-Control' => 'no-cache, no-store'
            ],
            'options' => []
        ]
    ],

    // Log exception trace stack?
    'logging' => true,
];
