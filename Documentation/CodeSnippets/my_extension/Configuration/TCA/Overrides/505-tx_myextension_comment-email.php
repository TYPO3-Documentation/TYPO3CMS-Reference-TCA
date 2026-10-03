<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_comment', [
  'email' => [
    'label' => 'my_extension.db:comment.email',
    'config' => [
      'type' => 'email',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_comment',
  'email',
  '',
  'before:hidden',
);
