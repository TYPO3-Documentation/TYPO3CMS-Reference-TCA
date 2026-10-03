<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_comment', [
  'content' => [
    'label' => 'my_extension.db:comment.content',
    'config' => [
      'type' => 'text',
      'required' => true,
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_comment',
  'content',
  '',
  'before:hidden',
);
