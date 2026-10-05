<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'location' => [
    'label' => 'my_extension.db:conference.location',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectSingle',
      'foreign_table' => 'tx_myextension_location',
      'items' => [
        ['label' => '', 'value' => 0],
      ],
      'fieldWizard' => [
        'selectIcons' => [
          'disabled' => false,
        ],
      ],
      'relationship' => 'manyToOne',
      // Venues only, not their halls
      'foreign_table_where' => 'AND {#tx_myextension_location}.{#parent} = 0 ORDER BY tx_myextension_location.name',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'location',
  '',
  'after:conference_date',
);
