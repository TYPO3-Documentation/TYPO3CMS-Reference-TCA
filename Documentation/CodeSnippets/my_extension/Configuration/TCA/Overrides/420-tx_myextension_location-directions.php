<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_location', [
  'directions' => [
    'label' => 'my_extension.db:location.directions',
    'config' => [
      'type' => 'text',
      'rows' => 5,
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_location',
  'directions',
  '',
  'after:image',
);
