<?php

use MyVendor\MyExtension\Evaluation\AbstractEvaluation;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'abstract' => [
    'label' => 'my_extension.db:talk.abstract',
    'config' => [
      'type' => 'text',
      'cols' => 40,
      'rows' => 5,
      'eval' => 'trim,' . AbstractEvaluation::class,
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'abstract',
  '',
  'before:--div--;core.form.tabs:access',
);
