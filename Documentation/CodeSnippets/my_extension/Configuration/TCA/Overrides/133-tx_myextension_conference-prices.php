<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'prices' => [
    'label' => 'my_extension.db:conference.prices',
    'config' => [
      'type' => 'text',
      'renderType' => 'textTable',
      'rows' => 5,
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'prices',
  '',
  'after:embed_code',
);
