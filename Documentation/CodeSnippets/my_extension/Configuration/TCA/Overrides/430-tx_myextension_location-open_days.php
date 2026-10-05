<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_location', [
  'open_days' => [
    'label' => 'my_extension.db:location.open_days',
    'config' => [
      'type' => 'check',
      'items' => [
        ['label' => 'my_extension.db:location.open_days.monday'],
        ['label' => 'my_extension.db:location.open_days.tuesday'],
        ['label' => 'my_extension.db:location.open_days.wednesday'],
        ['label' => 'my_extension.db:location.open_days.thursday'],
        ['label' => 'my_extension.db:location.open_days.friday'],
        ['label' => 'my_extension.db:location.open_days.saturday'],
        ['label' => 'my_extension.db:location.open_days.sunday'],
      ],
      'cols' => 'inline',
      // Monday to Friday: the first five bits
      'default' => 31,
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_location',
  'open_days',
  '',
  'after:capacity',
);
