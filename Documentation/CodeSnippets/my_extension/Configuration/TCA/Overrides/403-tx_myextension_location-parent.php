<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_location', [
  'parent' => [
    'label' => 'my_extension.db:location.parent',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectTree',
      'foreign_table' => 'tx_myextension_location',
      'size' => 10,
      'maxitems' => 1,
      'relationship' => 'manyToOne',
      'treeConfig' => [
        'parentField' => 'parent',
        'appearance' => [
          'expandAll' => true,
          'showHeader' => true,
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_location',
  'parent',
  '',
  'after:name',
);
