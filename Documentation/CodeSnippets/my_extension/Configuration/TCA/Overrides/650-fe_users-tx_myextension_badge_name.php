<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// The name printed on the conference badge of a frontend user. The column
// is defined in ext_tables.sql, as TYPO3 does not create it for type user.
ExtensionManagementUtility::addTCAcolumns('fe_users', [
  'tx_myextension_badge_name' => [
    'label' => 'my_extension.db:fe_users.tx_myextension_badge_name',
    'config' => [
      'type' => 'user',
      // Registered in ext_localconf.php
      'renderType' => 'badgeName',
      'parameters' => [
        'color' => '#ff8700',
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'fe_users',
  'tx_myextension_badge_name',
  '',
  'after:name',
);
