<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_speaker', [
  'bio' => [
    'label' => 'my_extension.db:speaker.bio',
    'config' => [
      'type' => 'text',
      'enableRichtext' => true,
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_speaker',
  'bio',
  '',
  'before:--div--;my_extension.db:tab.integration',
);
