<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'related_content' => [
    'label' => 'my_extension.db:conference.related_content',
    'config' => [
      'type' => 'group',
      'allowed' => 'pages,tt_content',
      'elementBrowserEntryPoints' => [
        '_default' => '###SITEROOT###',
      ],
      'suggestOptions' => [
        'default' => [
          'searchWholePhrase' => true,
        ],
        // Only standard pages
        'pages' => [
          'searchCondition' => 'doktype = 1',
        ],
        'tt_content' => [
          'additionalSearchFields' => 'bodytext',
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'related_content',
  '',
  'before:--div--;core.form.tabs:categories',
);
