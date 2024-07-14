<?php

$GLOBALS['TCA']['pages']['columns']['disabled'] = [
    'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
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
