<?php

return [

    'cp' => [
        'type' => 'prefix',
        'path' => '/cp(/)',

        'resolver' => [
            [
                'type' => 'pattern',
                'path' => '(<controller>(/<action>))',

                'defaults' => [
                    'controller' => 'dashboard',
                    'action'     => 'default',
                ]
            ]
        ],

        'defaults' => [
            'runner'   => 'cp',
            'notFound' => 'default'
        ]
    ],

    'ux' => [
        'type' => 'prefix',
        'path' => '(/)',

        'resolver' => [
            [
                'type' => 'pattern',
                'path' => '(<controller>(/<action>))',

                'defaults' => [
                    'controller' => 'view',
                    'action'     => 'default',
                ]
            ]
        ],

        'defaults' => [
            'runner'   => 'ux',
            'notFound' => 'default'
        ]
    ]

];