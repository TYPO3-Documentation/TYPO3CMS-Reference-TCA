<?php

use MyVendor\MyExtension\Evaluation\HashtagEvaluation;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'hashtag' => [
    'label' => 'my_extension.db:conference.hashtag',
    'l10n_mode' => 'exclude',
    'config' => [
      'type' => 'input',
      'max' => 50,
      'eval' => 'trim,nospace,lower,unique,' . HashtagEvaluation::class,
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'hashtag',
  '',
  'after:slug',
);
