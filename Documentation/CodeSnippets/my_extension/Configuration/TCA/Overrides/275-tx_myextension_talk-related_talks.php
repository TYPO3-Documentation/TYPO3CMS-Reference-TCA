<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'related_talks' => [
    'label' => 'my_extension.db:talk.related_talks',
    'config' => [
      'type' => 'group',
      'allowed' => 'tx_myextension_talk',
      'MM' => 'tx_myextension_talk_related_mm',
      'fieldControl' => [
        // The element browser does not list talks, because their table is
        // hidden. Editors find a talk with the search field instead.
        'elementBrowser' => [
          'disabled' => true,
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'related_talks',
  '',
  'before:--div--;core.form.tabs:access',
);
