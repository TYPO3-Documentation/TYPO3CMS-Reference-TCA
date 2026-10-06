<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_hotel', [
  'conferences' => [
    'label' => 'my_extension.db:hotel.conferences',
    'config' => [
      'type' => 'inline',
      'foreign_table' => 'tx_myextension_conference',
      'MM' => 'tx_myextension_conference_hotel_mm',
      // The other side of the hotels of a conference
      'MM_opposite_field' => 'hotels',
      'appearance' => [
        'collapseAll' => true,
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_hotel',
  'conferences',
  '',
  'after:city',
);
