<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_hotel', [
  'nearest_venue' => [
    'label' => 'my_extension.db:hotel.nearest_venue',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectTree',
      'foreign_table' => 'tx_myextension_location',
      'size' => 5,
      'maxitems' => 1,
      'relationship' => 'manyToOne',
      'treeConfig' => [
        'parentField' => 'parent',
        // The site package lists the venues of the conferences of its site
        // in page TSconfig
        'startingPoints' => '###PAGE_TSCONFIG_IDLIST###',
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_hotel',
  'nearest_venue',
  '',
  'after:city',
);
