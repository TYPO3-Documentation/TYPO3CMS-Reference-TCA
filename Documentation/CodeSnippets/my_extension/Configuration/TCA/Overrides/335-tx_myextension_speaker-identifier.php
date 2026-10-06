<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_speaker', [
  'identifier' => [
    'label' => 'my_extension.db:speaker.identifier',
    'config' => [
      'type' => 'uuid',
      // Time-ordered, so new speakers sort after older ones
      'version' => 7,
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_speaker',
  'identifier',
  '',
  'before:--div--;core.form.tabs:access',
);
