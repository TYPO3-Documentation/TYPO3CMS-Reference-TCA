<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tt_content', [
  'tx_myextension_example_field' => [
    'label' => 'Example field',
    'displayCond' => [
      'AND' => [
        'FIELD:sys_language_uid:=:0',
        'OR' => [
          'FIELD:CType:=:text',
          'FIELD:header:=:Example',
        ],
      ],
    ],
    'config' => [
      'type' => 'input',
    ],
  ],
]);

ExtensionManagementUtility::addToAllTCAtypes(
  'tt_content',
  'tx_myextension_example_field',
);
