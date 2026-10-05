<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'event_format' => [
    'label' => 'my_extension.db:conference.event_format',
    'onChange' => 'reload',
    'l10n_mode' => 'exclude',
    'l10n_display' => 'defaultAsReadonly',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectSingle',
      'items' => [
        [
          'label' => 'my_extension.db:conference.event_format.onsite',
          'value' => 'onsite',
        ],
        [
          'label' => 'my_extension.db:conference.event_format.online',
          'value' => 'online',
        ],
        [
          'label' => 'my_extension.db:conference.event_format.hybrid',
          'value' => 'hybrid',
        ],
      ],
      'default' => 'onsite',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'event_format',
  '',
  'after:conference_date',
);
