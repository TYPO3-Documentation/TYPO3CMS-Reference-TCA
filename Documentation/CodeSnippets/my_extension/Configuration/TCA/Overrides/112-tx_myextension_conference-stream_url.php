<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'stream_url' => [
    'label' => 'my_extension.db:conference.stream_url',
    'displayCond' => 'FIELD:event_format:IN:online,hybrid',
    'config' => [
      'type' => 'link',
      'allowedTypes' => ['url'],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'stream_url',
  '',
  'after:event_format',
);
