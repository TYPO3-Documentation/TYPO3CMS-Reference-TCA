<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'color' => [
    'label' => 'my_extension.db:conference.color',
    'config' => [
      'type' => 'color',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'color',
  '',
  'before:--div--;core.form.tabs:categories',
);
