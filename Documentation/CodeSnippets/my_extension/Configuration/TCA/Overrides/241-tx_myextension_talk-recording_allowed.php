<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'recording_allowed' => [
    'label' => 'my_extension.db:talk.recording_allowed',
    'config' => [
      'type' => 'check',
      'items' => [
        ['label' => 'my_extension.db:talk.recording_allowed.item'],
      ],
      'behaviour' => [
        'allowLanguageSynchronization' => true,
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'recording_allowed',
  'talk,keynote',
  'after:recording',
);
