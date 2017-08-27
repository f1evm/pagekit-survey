<?php

use Pagekit\Application;

return [
    'name' => 'fevm/survey',
    'type' => 'extension',

    'main' => function( Application $app) {
    },

    'autoload' => [
        'fevm\\Survey\\' => 'src'
    ],

    'nodes' => [],

    'routes'  => [
        '/survey'     => [
            'name'       => '@survey',
            'controller' => [
                'fevm\\Survey\\Controller\\SurveyController'
            ]
        ]
    ],

    'widgets' => [],

    'menu' => [
        'survey'           => [
            'label'  => 'Survey',
            'url'    => '@survey',
            'active' => '@survey(/*)?',
            'icon'   => 'fevm/survey:icon.svg'
        ],
        'survey: settings' => [
           'parent' => 'survey',
           'label'  => 'Settings',
           'url'    => '@survey/settings',
           'access' => 'survey: manage settings'
        ]
    ],

    'permissions' => [
        'survey: manage settings' => ['title' => 'Manage settings']
    ],

    'settings' => '@survey/settings',

    'resources' => [
        'fevm/survey:' => ''
    ],

    'config' => [
        'restrict' => true
    ],

    'events' => []
];