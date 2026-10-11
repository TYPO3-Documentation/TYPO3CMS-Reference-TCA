<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'feedback_email' => [
    'label' => 'my_extension.db:talk.feedback_email',
    'config' => [
      'type' => 'link',
      'allowedTypes' => ['email'],
      'appearance' => [
        // The email can have a prepared subject and text
        'allowedOptions' => ['subject', 'body'],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'feedback_email',
  '',
  'after:comments',
);
