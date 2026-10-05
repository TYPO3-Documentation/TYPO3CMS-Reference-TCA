<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'livestream_password' => [
    'label' => 'my_extension.db:conference.livestream_password',
    'displayCond' => 'FIELD:event_format:IN:online,hybrid',
    'config' => [
      'type' => 'password',
      'hashed' => false,
      'passwordPolicy' => 'default',
      'fieldControl' => [
        'passwordGenerator' => [
          'renderType' => 'passwordGenerator',
          'options' => [
            'passwordPolicy' => 'default',
          ],
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'livestream_password',
  '',
  'after:stream_url',
);
