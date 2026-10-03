<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'seats' => [
    'label' => 'my_extension.db:conference.seats',
    'config' => [
      'type' => 'number',
      'range' => [
        'lower' => 1,
        'upper' => 5000,
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'seats',
  '',
  'before:--div--;core.form.tabs:categories',
);
