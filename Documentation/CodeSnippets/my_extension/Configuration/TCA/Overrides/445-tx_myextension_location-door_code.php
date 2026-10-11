<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_location', [
  'door_code' => [
    'label' => 'my_extension.db:location.door_code',
    'config' => [
      'type' => 'password',
      'hashed' => false,
      'fieldControl' => [
        'passwordGenerator' => [
          'renderType' => 'passwordGenerator',
          'options' => [
            // The keypad at the door of the room has only digits
            'passwordPolicy' => 'myExtensionDigits',
          ],
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_location',
  'door_code',
  '',
  'after:capacity',
);
