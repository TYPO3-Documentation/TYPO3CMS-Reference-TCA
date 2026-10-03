<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'categories' => [
    'label' => 'my_extension.db:conference.categories',
    'config' => [
      'type' => 'category',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'categories',
  '',
  'before:--div--;core.form.tabs:access',
);
