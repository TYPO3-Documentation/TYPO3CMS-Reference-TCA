<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'max_participants' => [
    'label' => 'my_extension.db:talk.max_participants',
    'config' => [
      'type' => 'number',
      'range' => [
        'lower' => 1,
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'max_participants',
  'workshop',
  'before:--div--;core.form.tabs:access',
);
