<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'registration_deadline' => [
    'label' => 'my_extension.db:conference.registration_deadline',
    'displayCond' => 'FIELD:registration_open:REQ:true',
    'config' => [
      'type' => 'datetime',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'registration_deadline',
  '',
  'after:registration_open',
);
