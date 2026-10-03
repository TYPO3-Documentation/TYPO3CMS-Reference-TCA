<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'slug' => [
    'label' => 'my_extension.db:conference.slug',
    'config' => [
      'type' => 'slug',
      'generatorOptions' => [
        'fields' => ['title'],
        'replacements' => [
          '&' => 'and',
        ],
      ],
      'fallbackCharacter' => '-',
      'eval' => 'uniqueInSite',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'slug',
  '',
  'after:title',
);
