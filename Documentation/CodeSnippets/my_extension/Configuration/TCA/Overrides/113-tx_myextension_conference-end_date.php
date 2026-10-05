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
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'end_date',
  '',
  'after:conference_date',
);
