<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tt_content', [
  'tx_myextension_layout_note' => [
    'label' => 'Layout note',
    'displayCond' => 'FIELD:layout:IN:1,2,3',
    'config' => [
      'type' => 'input',
    ],
  ],
]);

ExtensionManagementUtility::addToAllTCAtypes(
  'tt_content',
  'tx_myextension_layout_note',
);
