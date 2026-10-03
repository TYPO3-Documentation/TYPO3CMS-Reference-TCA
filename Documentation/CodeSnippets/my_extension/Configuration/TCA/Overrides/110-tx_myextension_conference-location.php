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
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'location',
  '',
  'after:conference_date',
);
