<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'hotels' => [
    'label' => 'my_extension.db:conference.hotels',
    'config' => [
      'type' => 'inline',
      'foreign_table' => 'tx_myextension_hotel',
      'MM' => 'tx_myextension_conference_hotel_mm',
      'appearance' => [
        'collapseAll' => true,
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'hotels',
  '',
  'before:--div--;core.form.tabs:categories',
);
