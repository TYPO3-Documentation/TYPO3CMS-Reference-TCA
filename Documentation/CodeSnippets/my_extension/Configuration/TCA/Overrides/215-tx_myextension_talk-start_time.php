<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'start_time' => [
    'label' => 'my_extension.db:talk.start_time',
    'config' => [
      'type' => 'datetime',
      'format' => 'datetime',
      'behaviour' => [
        'allowLanguageSynchronization' => true,
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'start_time',
  '',
  'after:speaker',
);
