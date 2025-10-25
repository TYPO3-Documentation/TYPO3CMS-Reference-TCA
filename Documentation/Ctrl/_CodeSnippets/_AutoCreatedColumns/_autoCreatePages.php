<?php

$GLOBALS['TCA']['pages']['columns']['disabled'] = [
    'label' => 'LLL:core.general:LGL.enabled',
    'exclude' => true,
    'config' => [
        'type' => 'check',
        'renderType' => 'checkboxToggle',
        'default' => 0,
        'items' => [
            [
                'label' => '',
                'invertStateDisplay' => true,
            ],
        ],
    ],
];
