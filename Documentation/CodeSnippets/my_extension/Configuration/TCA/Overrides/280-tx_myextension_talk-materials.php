<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'materials' => [
    'label' => 'my_extension.db:talk.materials',
    'config' => [
      'type' => 'folder',
      'relationship' => 'manyToOne',
      'elementBrowserEntryPoints' => [
        '_default' => '1:/workshops/',
      ],
      'behaviour' => [
        'allowLanguageSynchronization' => true,
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'materials',
  'workshop',
  'before:--div--;core.form.tabs:access',
);
