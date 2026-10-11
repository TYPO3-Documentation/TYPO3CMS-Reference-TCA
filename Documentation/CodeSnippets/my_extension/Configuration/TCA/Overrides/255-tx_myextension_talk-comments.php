<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'comments' => [
    'label' => 'my_extension.db:talk.comments',
    'config' => [
      'type' => 'inline',
      'foreign_table' => 'tx_myextension_comment',
      'foreign_field' => 'parent',
      'foreign_table_field' => 'parent_table',
      'appearance' => [
        'enabledControls' => [
          'new' => false,
        ],
      ],
    ],
  ],
]);
// The website quotes the comments on a keynote: the editors approve them,
// but they cannot change their text
$GLOBALS['TCA']['tx_myextension_talk']['types']['keynote']['columnsOverrides']['comments']['config']['overrideChildTca']['columns']['content']['config']['readOnly'] = true;
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'comments',
  '',
  'before:--div--;core.form.tabs:access',
);
