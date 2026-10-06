<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// Set by the inline fields of the conference, so the field is not shown
ExtensionManagementUtility::addTCAcolumns('tx_myextension_registration', [
  'status' => [
    'label' => 'my_extension.db:registration.status',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectSingle',
      'items' => [
        ['label' => 'my_extension.db:registration.status.confirmed', 'value' => 'confirmed'],
        ['label' => 'my_extension.db:registration.status.waiting', 'value' => 'waiting'],
      ],
    ],
  ],
]);
