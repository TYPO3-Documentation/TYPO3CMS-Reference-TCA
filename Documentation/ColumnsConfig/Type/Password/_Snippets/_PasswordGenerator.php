<?php

$GLOBALS['TCA']['tx_myextension_table']['columns']['password_field'] = [
    'label' => 'Password',
    'config' => [
        'type' => 'password',
        'fieldControl' => [
            'passwordGenerator' => [
                'renderType' => 'passwordGenerator',
            ],
        ],
    ],
];
