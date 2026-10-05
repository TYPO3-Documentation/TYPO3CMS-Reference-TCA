<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'audience' => [
    'label' => 'my_extension.db:talk.audience',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectSingleBox',
      'items' => [
        ['label' => 'my_extension.db:talk.audience.developers', 'value' => 'developers', 'group' => 'technical'],
        ['label' => 'my_extension.db:talk.audience.integrators', 'value' => 'integrators', 'group' => 'technical'],
        ['label' => 'my_extension.db:talk.audience.editors', 'value' => 'editors', 'group' => 'business'],
        ['label' => 'my_extension.db:talk.audience.decision_makers', 'value' => 'decision_makers', 'group' => 'business'],
      ],
      'itemGroups' => [
        'technical' => 'my_extension.db:talk.audience.technical',
        'business' => 'my_extension.db:talk.audience.business',
      ],
      'behaviour' => [
        'allowLanguageSynchronization' => true,
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'audience',
  '',
  'after:spoken_language',
);
