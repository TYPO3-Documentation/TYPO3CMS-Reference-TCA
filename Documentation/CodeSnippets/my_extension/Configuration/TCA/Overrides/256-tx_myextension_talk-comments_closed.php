<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'comments_closed' => [
    'label' => 'my_extension.db:talk.comments_closed',
    'config' => [
      'type' => 'check',
      'renderType' => 'checkboxLabeledToggle',
      'items' => [
        [
          'label' => 'my_extension.db:talk.comments_closed',
          // The toggle is on while the comments are open
          'invertStateDisplay' => true,
          'labelChecked' => 'my_extension.db:talk.comments_closed.open',
          'labelUnchecked' => 'my_extension.db:talk.comments_closed.closed',
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'comments_closed',
  '',
  'before:comments',
);
