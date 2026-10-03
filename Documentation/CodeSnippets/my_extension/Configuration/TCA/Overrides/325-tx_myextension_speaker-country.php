<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_speaker', [
  'country' => [
    'label' => 'my_extension.db:speaker.country',
    'config' => [
      'type' => 'country',
      'labelField' => 'localizedName',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_speaker',
  'country',
  '',
  'before:--div--;my_extension.db:tab.integration',
);
