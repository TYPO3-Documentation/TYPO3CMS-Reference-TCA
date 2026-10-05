<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'overlay_color' => [
    'label' => 'my_extension.db:conference.overlay_color',
    'config' => [
      'type' => 'color',
      'opacity' => true,
      'nullable' => true,
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'overlay_color',
  '',
  'after:color',
);
