<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'speaker' => [
    'label' => 'my_extension.db:talk.speaker',
    'config' => [
      'type' => 'group',
      'allowed' => 'tx_myextension_speaker',
      'maxitems' => 1,
      'relationship' => 'manyToOne',
      // The speakers are stored in the same folder as the talks
      'elementBrowserEntryPoints' => [
        'tx_myextension_speaker' => '###CURRENT_PID###',
      ],
      'fieldControl' => [
        'editPopup' => [
          'disabled' => false,
        ],
        'addRecord' => [
          'disabled' => false,
        ],
        'listModule' => [
          'disabled' => false,
        ],
      ],
      'behaviour' => [
        'allowLanguageSynchronization' => true,
      ],
    ],
  ],
]);
$GLOBALS['TCA']['tx_myextension_talk']['types']['keynote']['columnsOverrides']['speaker']['config']['minitems'] = 1;
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'speaker',
  '',
  'after:slug',
);
