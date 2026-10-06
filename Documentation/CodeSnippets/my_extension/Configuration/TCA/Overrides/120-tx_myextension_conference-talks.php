<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'talks' => [
    'label' => 'my_extension.db:conference.talks',
    'config' => [
      'type' => 'inline',
      'foreign_table' => 'tx_myextension_talk',
      'foreign_field' => 'conference',
      'foreign_sortby' => 'sorting',
      'appearance' => [
        'collapseAll' => true,
        'useSortable' => true,
        'showPossibleLocalizationRecords' => true,
        'showAllLocalizationLink' => true,
        'showSynchronizationLink' => true,
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'talks',
  '',
  'before:--div--;my_extension.db:tab.details',
);

// An inline field has no fieldInformation of its own. The container of all
// inline fields of the table shows it, see TalkOrderInformation.
$GLOBALS['TCA']['tx_myextension_conference']['ctrl']['container']['inline']
  ['fieldInformation']['talkOrder'] = [
    'renderType' => 'talkOrderInformation',
  ];
