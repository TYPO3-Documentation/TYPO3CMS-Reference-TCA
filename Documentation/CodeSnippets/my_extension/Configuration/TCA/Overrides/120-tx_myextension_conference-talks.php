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
