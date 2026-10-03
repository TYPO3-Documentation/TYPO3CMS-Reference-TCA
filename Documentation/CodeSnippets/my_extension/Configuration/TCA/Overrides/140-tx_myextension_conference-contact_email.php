<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'contact_email' => [
    'label' => 'my_extension.db:conference.contact_email',
    'config' => [
      'type' => 'email',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'contact_email',
  '',
  'before:--div--;core.form.tabs:categories',
);
