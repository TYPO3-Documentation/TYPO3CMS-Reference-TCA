<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'requirements' => [
    'label' => 'my_extension.db:talk.requirements',
    'config' => [
      'type' => 'text',
      'rows' => 3,
      'fixedFont' => true,
      'enableTabulator' => true,
      'wrap' => 'off',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'requirements',
  'workshop',
  'before:--div--;core.form.tabs:access',
);
