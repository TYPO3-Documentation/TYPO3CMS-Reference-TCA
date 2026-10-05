<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_speaker', [
  'topics' => [
    'label' => 'my_extension.db:speaker.topics',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectCheckBox',
      'items' => [
        [
          'label' => 'my_extension.db:speaker.topics.tca',
          'value' => 'tca',
          'group' => 'backend',
          'icon' => 'content-database',
          'description' => 'my_extension.db:speaker.topics.tca.description',
        ],
        ['label' => 'my_extension.db:speaker.topics.extbase', 'value' => 'extbase', 'group' => 'backend'],
        ['label' => 'my_extension.db:speaker.topics.fluid', 'value' => 'fluid', 'group' => 'frontend'],
        ['label' => 'my_extension.db:speaker.topics.typoscript', 'value' => 'typoscript', 'group' => 'frontend'],
        ['label' => 'my_extension.db:speaker.topics.accessibility', 'value' => 'accessibility', 'group' => 'frontend'],
      ],
      'itemGroups' => [
        'backend' => 'my_extension.db:speaker.topics.group.backend',
        'frontend' => 'my_extension.db:speaker.topics.group.frontend',
      ],
      'appearance' => [
        'expandAll' => true,
      ],
      'behaviour' => [
        'allowLanguageSynchronization' => true,
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_speaker',
  'topics',
  '',
  'after:short_bio',
);
