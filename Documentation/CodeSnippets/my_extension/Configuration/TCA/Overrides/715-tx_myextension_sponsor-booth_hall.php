<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_sponsor', [
  'booth_hall' => [
    'label' => 'my_extension.db:sponsor.booth_hall',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectTree',
      'foreign_table' => 'tx_myextension_location',
      'size' => 5,
      'maxitems' => 1,
      'relationship' => 'manyToOne',
      'treeConfig' => [
        'parentField' => 'parent',
        // Each conference has its own site, and the site configuration
        // names the venue, so the tree shows only the halls of that venue
        'startingPoints' => '###SITE:conference.venue###',
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_sponsor',
  'booth_hall',
  '',
  'after:tier',
);
