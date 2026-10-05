<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'comments' => [
    'label' => 'my_extension.db:talk.comments',
    'config' => [
      'type' => 'inline',
      'foreign_table' => 'tx_myextension_comment',
      'foreign_field' => 'parent',
      'foreign_table_field' => 'parent_table',
      'appearance' => [
        'enabledControls' => [
          'new' => false,
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'comments',
  '',
  'before:--div--;core.form.tabs:access',
);
