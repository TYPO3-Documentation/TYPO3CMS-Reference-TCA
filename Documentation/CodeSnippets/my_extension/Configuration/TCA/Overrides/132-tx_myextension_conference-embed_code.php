<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'embed_code' => [
    'label' => 'my_extension.db:conference.embed_code',
    'config' => [
      'type' => 'text',
      'renderType' => 'codeEditor',
      'format' => 'html',
      'rows' => 7,
      'appearance' => [
        'lineWrapping' => true,
      ],
      'behaviour' => [
        'allowLanguageSynchronization' => true,
      ],
      'searchable' => false,
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'embed_code',
  '',
  'after:description',
);
