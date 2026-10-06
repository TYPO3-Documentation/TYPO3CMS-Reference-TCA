<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// The tracks of the program, which the talks offer as items
ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'tracks' => [
    'label' => 'my_extension.db:conference.tracks',
    'description' => 'my_extension.db:conference.tracks.description',
    'config' => [
      'type' => 'text',
      'rows' => 4,
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'tracks',
  '',
  'after:partners',
);
