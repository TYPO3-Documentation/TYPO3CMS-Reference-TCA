<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'description' => [
    'label' => 'my_extension.db:conference.description',
    'config' => [
      'type' => 'text',
      'enableRichtext' => true,
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'description',
  '',
  'before:--div--;core.form.tabs:categories',
);
