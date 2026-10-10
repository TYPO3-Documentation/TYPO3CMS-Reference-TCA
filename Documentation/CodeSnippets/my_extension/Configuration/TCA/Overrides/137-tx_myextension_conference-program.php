<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'program' => [
    'label' => 'my_extension.db:conference.program',
    'config' => [
      'type' => 'link',
      'allowedTypes' => ['file'],
      'appearance' => [
        // The printed program is a PDF file
        'allowedFileExtensions' => ['pdf'],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'program',
  '',
  'after:website',
);
