<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_speaker', [
  'salutation' => [
    'label' => 'my_extension.db:speaker.salutation',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectSingle',
      'items' => [
        ['label' => '', 'value' => ''],
        [
          'label' => 'my_extension.db:speaker.salutation.mr',
          'value' => 'mr',
        ],
        [
          'label' => 'my_extension.db:speaker.salutation.ms',
          'value' => 'ms',
        ],
        [
          'label' => 'my_extension.db:speaker.salutation.mx',
          'value' => 'mx',
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_speaker',
  'salutation',
  '',
  'before:name',
);
