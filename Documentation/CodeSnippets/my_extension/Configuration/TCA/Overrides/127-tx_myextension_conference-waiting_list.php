<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'waiting_list' => [
    'label' => 'my_extension.db:conference.waiting_list',
    'config' => [
      'type' => 'inline',
      // The same table as the registrations, kept apart by the status
      'foreign_table' => 'tx_myextension_registration',
      'foreign_field' => 'conference',
      'foreign_selector' => 'attendee',
      'foreign_unique' => 'attendee',
      'foreign_match_fields' => [
        'status' => 'waiting',
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'waiting_list',
  '',
  'after:registrations',
);
