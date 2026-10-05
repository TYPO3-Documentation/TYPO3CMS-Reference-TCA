<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_speaker', [
  'website' => [
    'label' => 'my_extension.db:speaker.website',
    'config' => [
      'type' => 'link',
      'valuePicker' => [
        'items' => [
          ['label' => 'Profile page', 'value' => 'https://example.org/profile/'],
          ['label' => 'Code repository', 'value' => 'https://example.org/code/'],
        ],
      ],
      'allowedTypes' => ['url'],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_speaker',
  'website',
  '',
  'before:--div--;my_extension.db:tab.integration',
);
