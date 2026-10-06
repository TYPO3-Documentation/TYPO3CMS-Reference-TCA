<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_location', [
  'latitude' => [
    'label' => 'my_extension.db:location.latitude',
    'config' => [
      'type' => 'number',
      'scale' => 6,
    ],
  ],
  'longitude' => [
    'label' => 'my_extension.db:location.longitude',
    'config' => [
      'type' => 'number',
      'scale' => 6,
    ],
  ],
]);
$GLOBALS['TCA']['tx_myextension_location']['palettes']['coordinates'] = [
  'label' => 'my_extension.db:location.palette.coordinates',
  'description' => 'my_extension.db:location.palette.coordinates.description',
  'showitem' => 'latitude, longitude',
];
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_location',
  '--palette--;;coordinates',
  '',
  'after:country',
);
