<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_sponsor', [
  'logo' => [
    'label' => 'my_extension.db:sponsor.logo',
    'config' => [
      'type' => 'file',
      // Every sponsor has exactly one logo
      'minitems' => 1,
      'maxitems' => 1,
      'allowed' => 'common-image-types',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_sponsor',
  'logo',
  '',
  'after:tier',
);
