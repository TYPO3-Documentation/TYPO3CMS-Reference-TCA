<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_hotel', [
  'recommended' => [
    'label' => 'my_extension.db:hotel.recommended',
    'config' => [
      'type' => 'check',
      'items' => [
        ['label' => 'my_extension.db:hotel.recommended.item'],
      ],
      // Each conference keeps its hotels in a folder of its own and
      // recommends one of them
      'eval' => 'maximumRecordsCheckedInPid',
      'validation' => [
        'maximumRecordsCheckedInPid' => 1,
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_hotel',
  'recommended',
  '',
  'after:name',
);
