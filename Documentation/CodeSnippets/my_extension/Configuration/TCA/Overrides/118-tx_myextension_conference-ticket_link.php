<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'ticket_link' => [
    'label' => 'my_extension.db:conference.ticket_link',
    'displayCond' => [
      'AND' => [
        'FIELD:registration_open:REQ:true',
        'FIELD:seats:>:0',
      ],
    ],
    'config' => [
      'type' => 'link',
      'allowedTypes' => ['page', 'url'],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'ticket_link',
  '',
  'after:registration_deadline',
);
