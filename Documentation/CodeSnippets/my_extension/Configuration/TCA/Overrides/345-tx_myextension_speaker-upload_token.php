<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_speaker', [
  'upload_token' => [
    'label' => 'my_extension.db:speaker.upload_token',
    'config' => [
      'type' => 'password',
      'hashed' => false,
      'fieldControl' => [
        'passwordGenerator' => [
          'renderType' => 'passwordGenerator',
          'options' => [
            // The token is part of the link with which the speaker uploads
            // the slides, so the editors cannot choose it themselves
            'passwordPolicy' => 'myExtensionBase64',
            'allowEdit' => false,
          ],
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_speaker',
  'upload_token',
  '',
  'after:identifier',
);
