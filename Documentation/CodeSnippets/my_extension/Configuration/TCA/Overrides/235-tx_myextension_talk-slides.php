<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'slides' => [
    'label' => 'my_extension.db:talk.slides',
    'config' => [
      'type' => 'file',
      'allowed' => 'pdf',
      'maxitems' => 1,
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'slides',
  'talk,keynote',
  'before:--div--;core.form.tabs:access',
);
