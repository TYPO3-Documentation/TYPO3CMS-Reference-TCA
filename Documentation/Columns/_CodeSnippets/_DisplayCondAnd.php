<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tt_content', [
  'tx_myextension_show_teaser' => [
    'label' => 'Show teaser',
    'onChange' => 'reload',
    'config' => [
      'type' => 'check',
      'renderType' => 'checkboxToggle',
    ],
  ],
  'tx_myextension_teaser' => [
    'label' => 'Teaser',
    'displayCond' => [
      'AND' => [
        'FIELD:tx_myextension_show_teaser:REQ:true',
        'FIELD:header:=:Headline',
      ],
    ],
    'config' => [
      'type' => 'text',
    ],
  ],
]);

ExtensionManagementUtility::addToAllTCAtypes(
  'tt_content',
  'tx_myextension_show_teaser, tx_myextension_teaser',
);
