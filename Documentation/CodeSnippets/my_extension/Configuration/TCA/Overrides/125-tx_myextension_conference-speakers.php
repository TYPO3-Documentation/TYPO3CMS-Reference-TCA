<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'speakers' => [
    'label' => 'my_extension.db:conference.speakers',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectMultipleSideBySide',
      'foreign_table' => 'tx_myextension_speaker',
      'MM' => 'tx_myextension_conference_speaker_mm',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'speakers',
  '',
  'before:--div--;my_extension.db:tab.details',
);
