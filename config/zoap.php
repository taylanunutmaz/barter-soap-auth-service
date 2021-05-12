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
                'keyValue' => \Viewflex\Zoap\Demo\Types\KeyValue::class,
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
