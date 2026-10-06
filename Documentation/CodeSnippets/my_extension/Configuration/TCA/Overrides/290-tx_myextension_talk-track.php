<?php

use MyVendor\MyExtension\Backend\TrackItems;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'track' => [
    'label' => 'my_extension.db:talk.track',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectSingle',
      'items' => [
        ['label' => '', 'value' => ''],
      ],
      // Adds the tracks of the conference of the talk
      'itemsProcFunc' => TrackItems::class . '->addTracks',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'track',
  '',
  'after:room',
);
