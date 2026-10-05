<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'ticketing_secret' => [
    'label' => 'my_extension.db:conference.ticketing_secret',
    'config' => [
      'type' => 'password',
      'hashed' => false,
      'fieldControl' => [
        'passwordGenerator' => [
          'renderType' => 'passwordGenerator',
          'options' => [
            'passwordPolicy' => 'secretToken',
            'allowEdit' => false,
          ],
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'ticketing_secret',
  '',
  'after:prices',
);
