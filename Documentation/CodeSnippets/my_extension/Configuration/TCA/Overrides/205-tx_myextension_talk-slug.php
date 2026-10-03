<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'slug' => [
    'label' => 'my_extension.db:talk.slug',
    'config' => [
      'type' => 'slug',
      'generatorOptions' => [
        'fields' => ['title'],
      ],
      'eval' => 'uniqueInPid',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'slug',
  '',
  'after:title',
);
