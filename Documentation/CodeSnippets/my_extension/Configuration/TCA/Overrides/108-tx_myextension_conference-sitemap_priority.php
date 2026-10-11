<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'sitemap_priority' => [
    'label' => 'my_extension.db:conference.sitemap_priority',
    'config' => [
      'type' => 'number',
      // The priority in an XML sitemap goes from 0.0 to 1.0
      'scale' => 1,
      'range' => [
        'lower' => 0,
        'upper' => 1,
      ],
      'slider' => [
        'step' => 0.1,
      ],
      'default' => 0.5,
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'sitemap_priority',
  '',
  'after:slug',
);
