<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_comment', [
  'approved' => [
    'label' => 'my_extension.db:comment.approved',
    'config' => [
      'type' => 'check',
      'renderType' => 'checkboxToggle',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_comment',
  'approved',
  '',
  'before:hidden',
);
