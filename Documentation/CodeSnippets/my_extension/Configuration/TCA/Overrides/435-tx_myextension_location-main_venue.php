<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_location', [
  'main_venue' => [
    'label' => 'my_extension.db:location.main_venue',
    'config' => [
      'type' => 'check',
      'items' => [
        ['label' => 'my_extension.db:location.main_venue.item'],
      ],
      'eval' => 'maximumRecordsChecked',
      'validation' => [
        'maximumRecordsChecked' => 1,
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_location',
  'main_venue',
  '',
  'after:name',
);
