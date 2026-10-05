<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'doors_open' => [
    'label' => 'my_extension.db:conference.doors_open',
    'config' => [
      'type' => 'datetime',
      'format' => 'time',
      'dbType' => 'time',
      'nullable' => true,
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'doors_open',
  '',
  'after:end_date',
);
