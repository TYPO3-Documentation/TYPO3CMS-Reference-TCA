<?php

use MyVendor\MyExtension\Backend\ItemsProcessor\TimezoneItemsProcessor;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'timezone' => [
    'label' => 'my_extension.db:conference.timezone',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectSingle',
      'items' => [
        ['label' => '', 'value' => ''],
      ],
      'itemsProcessors' => [
        100 => [
          'class' => TimezoneItemsProcessor::class,
          'parameters' => [
            'regions' => 'Europe,America',
          ],
        ],
      ],
      'itemGroups' => [
        'Europe' => 'my_extension.db:conference.timezone.europe',
        'America' => 'my_extension.db:conference.timezone.america',
      ],
      'sortItems' => [
        'label' => 'asc',
      ],
      'dbFieldLength' => 64,
      'behaviour' => [
        'allowLanguageSynchronization' => true,
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'timezone',
  '',
  'after:location',
);
