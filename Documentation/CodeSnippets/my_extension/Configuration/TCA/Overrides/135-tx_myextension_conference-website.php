<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'website' => [
    'label' => 'my_extension.db:conference.website',
    'config' => [
      'type' => 'link',
      'allowedTypes' => ['url'],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'website',
  '',
  'before:--div--;core.form.tabs:categories',
);
