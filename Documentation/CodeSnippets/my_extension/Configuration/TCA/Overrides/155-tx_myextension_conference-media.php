<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'logo' => [
    'label' => 'my_extension.db:conference.logo',
    'config' => [
      'type' => 'file',
      'maxitems' => 1,
      'allowed' => 'common-image-types',
      'relationship' => 'manyToOne',
    ],
  ],
  'impressions' => [
    'label' => 'my_extension.db:conference.impressions',
    'config' => [
      'type' => 'file',
      'allowed' => 'common-image-types',
    ],
  ],
]);
$GLOBALS['TCA']['tx_myextension_conference']['palettes']['media'] = [
  'showitem' => 'logo, impressions',
];
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  '--palette--;;media',
  '',
  'before:--div--;core.form.tabs:categories',
);
