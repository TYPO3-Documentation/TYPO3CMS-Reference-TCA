<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_comment', [
  'reply' => [
    'label' => 'my_extension.db:comment.reply',
    'config' => [
      'type' => 'inline',
      // The reply of the organizers is a comment, too. Its parent is the
      // comment that it answers
      'foreign_table' => 'tx_myextension_comment',
      'foreign_field' => 'parent',
      'foreign_table_field' => 'parent_table',
      // The organizers answer a comment once
      'relationship' => 'oneToOne',
      'overrideChildTca' => [
        'types' => [
          '0' => [
            'showitem' => 'name, content',
          ],
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_comment',
  'reply',
  '',
  'after:content',
);
