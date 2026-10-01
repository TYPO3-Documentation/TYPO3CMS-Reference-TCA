<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tt_content', [
  'my_new_field' => [
    'label' => 'Inline field with field information',
    'config' => [
      'type' => 'inline',
      'foreign_table' => 'tx_myextension_item',
      'foreign_field' => 'parent_content',
    ],
  ],
]);

ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'my_new_field');
