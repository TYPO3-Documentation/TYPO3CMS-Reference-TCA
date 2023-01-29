<?php

defined('TYPO3') or die();

$tempColumns = [
    'tx_myextension_special' => [
        'label' => 'My label',
        'config' => [
            'type' => 'user',
            // renderType needs to be registered in ext_localconf.php
            'renderType' => 'specialField',
            'parameters' => [
                'size' => '30',
                'color' => '#F49700',
            ],
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'fe_users',
    $tempColumns
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'fe_users',
    'tx_myextension_special',
);
