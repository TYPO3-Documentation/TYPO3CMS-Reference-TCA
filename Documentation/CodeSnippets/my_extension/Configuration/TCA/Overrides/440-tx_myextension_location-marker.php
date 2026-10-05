<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_location', [
  'marker' => [
    'label' => 'my_extension.db:location.marker',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectSingle',
      'items' => [
        ['label' => '', 'value' => ''],
      ],
      'fileFolderConfig' => [
        'folder' => 'EXT:my_extension/Resources/Public/Icons/Markers/',
        'allowedExtensions' => 'svg',
        'depth' => 0,
      ],
      'fieldWizard' => [
        'selectIcons' => [
          'disabled' => false,
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_location',
  'marker',
  '',
  'after:image',
);
