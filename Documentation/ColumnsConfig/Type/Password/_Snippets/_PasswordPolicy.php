<?php

$GLOBALS['TCA']['fe_users']['columns']['password']['config']['fieldControl']['passwordGenerator'] =
    [
        'passwordGenerator' => [
            'renderType' => 'passwordGenerator',
            'options' => [
                'passwordPolicy' => 'myCustomPolicy',
            ],
        ],
    ];
