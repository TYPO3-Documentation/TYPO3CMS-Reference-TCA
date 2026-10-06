<?php

use MyVendor\MyExtension\Slug\TalkSlugPrefix;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'slug' => [
    'label' => 'my_extension.db:talk.slug',
    'config' => [
      'type' => 'slug',
      'generatorOptions' => [
        // For example "workshop/write-your-first-form-element"
        'fields' => ['talk_type', 'title'],
      ],
      'appearance' => [
        'prefix' => TalkSlugPrefix::class . '->getPrefix',
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
