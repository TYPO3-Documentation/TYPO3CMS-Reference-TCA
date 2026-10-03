<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_speaker', [
  'website' => [
    'label' => 'my_extension.db:speaker.website',
    'config' => [
      'type' => 'link',
      'allowedTypes' => ['url'],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_speaker',
  'website',
  '',
  'before:--div--;my_extension.db:tab.integration',
);
