<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'content_elements' => [
    'label' => 'my_extension.db:conference.content_elements',
    'config' => [
      'type' => 'inline',
      'foreign_table' => 'tt_content',
      'foreign_field' => 'tx_myextension_conference',
      'behaviour' => [
        'allowLanguageSynchronization' => true,
      ],
      'overrideChildTca' => [
        'columns' => [
          'CType' => [
            'config' => [
              'default' => 'text',
            ],
          ],
        ],
        'types' => [
          'text' => [
            'showitem' => 'CType, header, bodytext',
          ],
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'content_elements',
  '',
  'before:--div--;core.form.tabs:categories',
);
