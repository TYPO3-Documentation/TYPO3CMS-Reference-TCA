<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'end_date' => [
    'label' => 'my_extension.db:conference.end_date',
    'config' => [
      'type' => 'datetime',
      'format' => 'date',
      'nullable' => true,
      // The conference series runs from 2020 to 2030
      'range' => [
        'lower' => mktime(0, 0, 0, 1, 1, 2020),
        'upper' => mktime(23, 59, 59, 12, 31, 2030),
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'end_date',
  '',
  'after:conference_date',
);
