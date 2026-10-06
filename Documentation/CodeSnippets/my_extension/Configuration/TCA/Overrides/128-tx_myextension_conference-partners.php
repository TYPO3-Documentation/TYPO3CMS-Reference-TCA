<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'partners' => [
    'label' => 'my_extension.db:conference.partners',
    'config' => [
      'type' => 'inline',
      'foreign_table' => 'tx_myextension_partnership',
      'foreign_field' => 'conference',
      'foreign_sortby' => 'conference_sorting',
      'foreign_label' => 'partner',
      'symmetric_field' => 'partner',
      'symmetric_sortby' => 'partner_sorting',
      'symmetric_label' => 'conference',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'partners',
  '',
  'after:speakers',
);
