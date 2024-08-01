<?php

$passwordField = [
    'config' => [
        'label' => 'Your Password',
        'config' => [
            'type' => 'password',
            'passwordPolicy' => $GLOBALS['TYPO3_CONF_VARS']['FE']['passwordPolicy'] ?? '',
        ],
    ],
];
