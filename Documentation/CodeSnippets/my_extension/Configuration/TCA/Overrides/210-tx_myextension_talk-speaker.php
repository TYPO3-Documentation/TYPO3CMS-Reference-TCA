<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'speaker' => [
    'label' => 'my_extension.db:talk.speaker',
    'config' => [
      'type' => 'group',
      'allowed' => 'tx_myextension_speaker',
      'maxitems' => 1,
      'relationship' => 'manyToOne',
    ],
  ],
]);
$GLOBALS['TCA']['tx_myextension_talk']['types']['keynote']['columnsOverrides']['speaker']['config']['minitems'] = 1;
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'speaker',
  '',
  'after:slug',
);
