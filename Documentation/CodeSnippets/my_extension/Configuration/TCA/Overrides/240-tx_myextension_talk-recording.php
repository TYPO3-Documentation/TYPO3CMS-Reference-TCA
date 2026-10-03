<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'recording' => [
    'label' => 'my_extension.db:talk.recording',
    'config' => [
      'type' => 'link',
      'allowedTypes' => ['url'],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'recording',
  'talk,keynote',
  'before:--div--;core.form.tabs:access',
);
