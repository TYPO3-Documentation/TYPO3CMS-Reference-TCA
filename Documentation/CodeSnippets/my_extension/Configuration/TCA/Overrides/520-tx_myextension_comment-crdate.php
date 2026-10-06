<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// Shows when a comment was written. TYPO3 sets the value, an editor
// cannot change it.
ExtensionManagementUtility::addTCAcolumns('tx_myextension_comment', [
  'crdate' => [
    'label' => 'my_extension.db:comment.crdate',
    'config' => [
      'type' => 'none',
      'format' => 'datetime',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_comment',
  'crdate',
  '',
  'after:name',
);
