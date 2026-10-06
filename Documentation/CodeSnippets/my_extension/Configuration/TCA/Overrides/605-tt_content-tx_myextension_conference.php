<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// The conference that a content element belongs to, see
// 159-tx_myextension_conference-content_elements.php
ExtensionManagementUtility::addTCAcolumns('tt_content', [
  'tx_myextension_conference' => [
    'config' => [
      'type' => 'passthrough',
    ],
  ],
]);
