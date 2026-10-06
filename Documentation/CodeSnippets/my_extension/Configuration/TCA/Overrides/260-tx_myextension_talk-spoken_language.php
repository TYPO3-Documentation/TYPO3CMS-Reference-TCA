<?php

use MyVendor\MyExtension\Backend\ItemsProcessor\SpokenLanguageItemsProcessor;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'spoken_language' => [
    'label' => 'my_extension.db:talk.spoken_language',
    'config' => [
      'type' => 'radio',
      // Required for radio fields, the items come from the processor
      'items' => [],
      'itemsProcessors' => [
        100 => [
          'class' => SpokenLanguageItemsProcessor::class,
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'spoken_language',
  '',
  'after:abstract',
);
