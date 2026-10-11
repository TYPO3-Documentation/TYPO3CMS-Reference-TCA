<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'room_setup' => [
    'label' => 'my_extension.db:talk.room_setup',
    'config' => [
      'type' => 'flex',
      // Used by all record types that do not override it
      'ds' => 'FILE:EXT:my_extension/Configuration/FlexForms/RoomSetup.xml',
    ],
  ],
]);
// The participants of a workshop sit at tables in groups and need power
// for their laptops
$GLOBALS['TCA']['tx_myextension_talk']['types']['workshop']['columnsOverrides']['room_setup']['config']['ds'] = 'FILE:EXT:my_extension/Configuration/FlexForms/WorkshopRoomSetup.xml';
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'room_setup',
  '',
  'after:room',
);
