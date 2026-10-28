<?php

use MyVendor\MyExtension\UserFunctions\FormEngine\TimezoneSorter;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'timezone' => [
    'label' => 'LLL:EXT:my_extension/Resources/Private/Language/locallang_db.xlf:conference.timezone',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectSingle',
      'items' => [
        ['label' => '', 'value' => ''],
        ['label' => 'Berlin', 'value' => 'Europe/Berlin'],
        ['label' => 'Lisbon', 'value' => 'Europe/Lisbon'],
        ['label' => 'New York', 'value' => 'America/New_York'],
        ['label' => 'Vilnius', 'value' => 'Europe/Vilnius'],
      ],
      'sortItems' => [
        'label' => 'asc',
        // Then by the offset to UTC, the time zones with the same offset
        // stay sorted by label
        'offset' => TimezoneSorter::class . '->sortByOffset',
      ],
      'dbFieldLength' => 64,
    ],
  ],
]);
