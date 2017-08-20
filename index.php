<?php

return [
    'name' => 'fevm/survey',
    'type' => 'extension',
    'main' => function( Application $app ) {
    },

    'autoload' => [
        'fevm\\Survey\\' => 'src'
    ],

    'nodes' => [],

    'routes' => [],

    'widgets' => [],

    'menu' => [],

    'permissions' => [],

    'settings' => '@survey/settings',

    'resources' => [
        'fevm/survey:' => ''
    ],

    'config' => [],

    'events' => []
];