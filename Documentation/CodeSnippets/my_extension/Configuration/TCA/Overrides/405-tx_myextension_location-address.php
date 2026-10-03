<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_location', [
  'street' => [
    'label' => 'my_extension.db:location.street',
    'config' => [
      'type' => 'input',
    ],
  ],
  'zip' => [
    'label' => 'my_extension.db:location.zip',
    'config' => [
      'type' => 'input',
      'size' => 10,
    ],
  ],
]);
$GLOBALS['TCA']['tx_myextension_location']['palettes']['address'] = [
  'label' => 'my_extension.db:location.palette.address',
  'showitem' => 'street, --linebreak--, zip, city',
];
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_location',
  '--palette--;;address',
  '',
  'replace:city',
);
