<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'topic' => [
    'label' => 'my_extension.db:talk.topic',
    'config' => [
      'type' => 'category',
      'relationship' => 'oneToOne',
      'treeConfig' => [
        // The root category is set in the site configuration
        'startingPoints' => '###SITE:categories.root###',
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'topic',
  '',
  'before:--div--;core.form.tabs:access',
);
