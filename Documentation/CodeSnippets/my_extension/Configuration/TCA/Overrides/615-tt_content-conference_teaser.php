<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// The fields of the teaser
ExtensionManagementUtility::addTCAcolumns('tt_content', [
  'tx_myextension_teaser_conference' => [
    'label' => 'my_extension.db:tt_content.tx_myextension_teaser_conference',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectSingle',
      'foreign_table' => 'tx_myextension_conference',
      'foreign_table_where' => 'AND {#tx_myextension_conference}.{#sys_language_uid} IN (-1, 0)',
    ],
  ],
  'tx_myextension_teaser_link_text' => [
    'label' => 'my_extension.db:tt_content.tx_myextension_teaser_link_text',
    'config' => [
      'type' => 'input',
    ],
  ],
  'tx_myextension_teaser_note' => [
    'label' => 'my_extension.db:tt_content.tx_myextension_teaser_note',
    'config' => [
      'type' => 'input',
    ],
  ],
]);

// Add the content element to the "Type" dropdown, after the call for papers.
// Predefined and own fields on the "General" tab and a tab of its own.
// addRecordType() adds the "Extended" tab at the end.
ExtensionManagementUtility::addRecordType(
  [
    'label' => 'my_extension.db:tt_content.conference_teaser',
    'value' => 'myextension_conferenceteaser',
    'icon' => 'my-extension-conference-list',
    'group' => 'conference',
    'description' => 'my_extension.db:tt_content.conference_teaser.description',
  ],
  '
    --palette--;;headers,
    tx_myextension_teaser_conference,
    --div--;my_extension.db:tab.teaser,
      tx_myextension_teaser_link_text,
  ',
  [],
  'after:myextension_callforpapers',
);

// Added without a position, so the field is shown on the "Extended" tab
ExtensionManagementUtility::addToAllTCAtypes(
  'tt_content',
  'tx_myextension_teaser_note',
  'myextension_conferenceteaser',
);
