<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'registration_open' => [
    'label' => 'my_extension.db:conference.registration_open',
    'onChange' => 'reload',
    'config' => [
      'type' => 'check',
      'renderType' => 'checkboxToggle',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'registration_open',
  '',
  'after:published',
);
