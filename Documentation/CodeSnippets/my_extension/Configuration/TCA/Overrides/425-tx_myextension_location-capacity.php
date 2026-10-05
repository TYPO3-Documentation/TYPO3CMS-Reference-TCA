<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_location', [
  'capacity' => [
    'label' => 'my_extension.db:location.capacity',
    'config' => [
      'type' => 'number',
      'range' => [
        'lower' => 1,
      ],
      'valuePicker' => [
        'items' => [
          ['label' => '50', 'value' => 50],
          ['label' => '100', 'value' => 100],
          ['label' => '250', 'value' => 250],
          ['label' => '500', 'value' => 500],
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_location',
  'capacity',
  '',
  'after:directions',
);
