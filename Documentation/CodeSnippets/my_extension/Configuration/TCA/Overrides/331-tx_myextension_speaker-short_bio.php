<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_speaker', [
  'short_bio' => [
    'label' => 'my_extension.db:speaker.short_bio',
    'config' => [
      'type' => 'text',
      'rows' => 3,
      'max' => 300,
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_speaker',
  'short_bio',
  '',
  'before:--div--;my_extension.db:tab.integration',
);
