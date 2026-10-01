<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_mytable', [
  'categories' => [
    'label' => 'Categories',
    'config' => [
      'type' => 'category',
    ],
  ],
  'main_category' => [
    'label' => 'Main category',
    'config' => [
      'type' => 'category',
      'relationship' => 'oneToOne',
    ],
  ],
  'site_categories' => [
    'label' => 'Categories of this site',
    'config' => [
      'type' => 'category',
      'treeConfig' => [
        'startingPoints' => '1,2,###SITE:categories.root###',
      ],
    ],
  ],
]);

ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_mytable',
  'categories, main_category, site_categories',
);
