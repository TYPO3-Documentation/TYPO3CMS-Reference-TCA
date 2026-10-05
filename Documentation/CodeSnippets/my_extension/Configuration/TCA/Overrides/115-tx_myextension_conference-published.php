<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'published' => [
    'label' => 'my_extension.db:conference.published',
    'exclude' => true,
    'config' => [
      'type' => 'check',
      'renderType' => 'checkboxToggle',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'published',
  '',
  'after:location',
);
