<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'level' => [
    'label' => 'my_extension.db:talk.level',
    'config' => [
      'type' => 'radio',
      'items' => [
        ['label' => 'my_extension.db:talk.level.beginner', 'value' => 1],
        ['label' => 'my_extension.db:talk.level.advanced', 'value' => 2],
        ['label' => 'my_extension.db:talk.level.expert', 'value' => 3],
      ],
      'default' => 1,
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'level',
  'talk,workshop',
  'before:--div--;core.form.tabs:access',
);
