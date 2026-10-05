<?php

use MyVendor\MyExtension\Backend\ItemsProcessor\ConferenceDaysItemsProcessor;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'days' => [
    'label' => 'my_extension.db:talk.days',
    'description' => 'my_extension.db:talk.days.description',
    'config' => [
      'type' => 'check',
      'cols' => 'inline',
      'itemsProcessors' => [
        100 => [
          'class' => ConferenceDaysItemsProcessor::class,
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'days',
  'workshop',
  'after:duration',
);
