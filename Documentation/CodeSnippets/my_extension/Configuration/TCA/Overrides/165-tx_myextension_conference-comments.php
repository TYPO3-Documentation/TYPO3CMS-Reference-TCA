<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'comments' => [
    'label' => 'my_extension.db:conference.comments',
    'config' => [
      'type' => 'inline',
      'foreign_table' => 'tx_myextension_comment',
      'foreign_field' => 'conference',
      'appearance' => [
        'enabledControls' => [
          'new' => false,
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'comments',
  '',
  'before:--div--;core.form.tabs:notes',
);
