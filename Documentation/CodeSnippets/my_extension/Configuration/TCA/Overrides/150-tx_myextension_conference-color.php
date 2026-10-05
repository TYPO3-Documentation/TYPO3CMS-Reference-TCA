<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'color' => [
    'label' => 'my_extension.db:conference.color',
    'config' => [
      'type' => 'color',
      'valuePicker' => [
        'items' => [
          ['label' => 'my_extension.db:conference.color.orange', 'value' => '#ff8700'],
          ['label' => 'my_extension.db:conference.color.teal', 'value' => '#2f99a4'],
          ['label' => 'my_extension.db:conference.color.night', 'value' => '#292545'],
        ],
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
  'color',
  '',
  'before:--div--;core.form.tabs:categories',
);
