<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'duration' => [
    'label' => 'my_extension.db:talk.duration',
    'config' => [
      'type' => 'number',
      'range' => [
        'lower' => 5,
        'upper' => 240,
      ],
      'slider' => [
        'step' => 5,
      ],
      'default' => 45,
      'behaviour' => [
        'allowLanguageSynchronization' => true,
      ],
    ],
  ],
]);
$GLOBALS['TCA']['tx_myextension_talk']['types']['workshop']['columnsOverrides']['duration']['config']['default'] = 180;
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'duration',
  '',
  'after:start_time',
);
