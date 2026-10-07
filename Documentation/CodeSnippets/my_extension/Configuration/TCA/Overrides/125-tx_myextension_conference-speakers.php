<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'speakers' => [
    'label' => 'my_extension.db:conference.speakers',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectMultipleSideBySide',
      'foreign_table' => 'tx_myextension_speaker',
      'MM' => 'tx_myextension_conference_speaker_mm',
      // Speakers in the default language, not their translations
      'foreign_table_where' => 'AND {#tx_myextension_speaker}.{#sys_language_uid} IN (-1, 0) ORDER BY tx_myextension_speaker.name',
      'size' => 5,
      'autoSizeMax' => 20,
      'fieldControl' => [
        'editPopup' => [
          'disabled' => false,
          'options' => [
            'title' => 'my_extension.db:conference.speakers.edit',
          ],
        ],
        'addRecord' => [
          'disabled' => false,
          'options' => [
            'title' => 'my_extension.db:conference.speakers.add',
            // A new speaker comes first in the list of selected speakers
            'setValue' => 'prepend',
          ],
        ],
        'listModule' => [
          'disabled' => false,
          'options' => [
            'title' => 'my_extension.db:conference.speakers.list',
          ],
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'speakers',
  '',
  'before:--div--;my_extension.db:tab.details',
);
