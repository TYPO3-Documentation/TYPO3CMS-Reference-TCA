<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'checklist' => [
    'label' => 'my_extension.db:talk.checklist',
    'config' => [
      'type' => 'check',
      // A finished task shows a tick in a circle, an open task a clock
      'items' => [
        [
          'label' => 'my_extension.db:talk.checklist.slides',
          'iconIdentifierChecked' => 'actions-check-circle',
          'iconIdentifierUnchecked' => 'actions-clock',
        ],
        [
          'label' => 'my_extension.db:talk.checklist.recording',
          'iconIdentifierChecked' => 'actions-check-circle',
          'iconIdentifierUnchecked' => 'actions-clock',
        ],
        [
          'label' => 'my_extension.db:talk.checklist.technical_check',
          'iconIdentifierChecked' => 'actions-check-circle',
          'iconIdentifierUnchecked' => 'actions-clock',
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'checklist',
  '',
  'before:--div--;core.form.tabs:access',
);
