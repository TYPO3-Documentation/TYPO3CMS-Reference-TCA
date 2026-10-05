<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'short_title' => [
    'label' => 'my_extension.db:conference.short_title',
    'config' => [
      'type' => 'input',
      'max' => 50,
      'placeholder' => '__row|title',
      'nullable' => true,
      'default' => null,
      'mode' => 'useOrOverridePlaceholder',
      'behaviour' => [
        'allowLanguageSynchronization' => true,
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'short_title',
  '',
  'after:title',
);
