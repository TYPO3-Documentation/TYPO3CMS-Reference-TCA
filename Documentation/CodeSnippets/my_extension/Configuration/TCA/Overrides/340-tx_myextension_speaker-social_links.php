<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_speaker', [
  'social_links' => [
    'label' => 'my_extension.db:speaker.social_links',
    'config' => [
      'type' => 'json',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_speaker',
  'social_links',
  '',
  'before:--div--;core.form.tabs:access',
);
