<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_partnership', [
  'discount' => [
    'label' => 'my_extension.db:partnership.discount',
    'config' => [
      'type' => 'number',
      'range' => [
        'lower' => 0,
        'upper' => 100,
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_partnership',
  'discount',
  '',
  'after:partner',
);
