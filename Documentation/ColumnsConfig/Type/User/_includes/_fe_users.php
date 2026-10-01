<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('fe_users', [
  'tx_myextension_special' => [
    'label' => 'My label',
    'config' => [
      'type' => 'user',
      // renderType needs to be registered in ext_localconf.php
      'renderType' => 'specialField',
      'parameters' => [
        'size' => '30',
        'color' => '#F49700',
      ],
    ],
  ],
]);

ExtensionManagementUtility::addToAllTCAtypes(
  'fe_users',
  'tx_myextension_special',
);
