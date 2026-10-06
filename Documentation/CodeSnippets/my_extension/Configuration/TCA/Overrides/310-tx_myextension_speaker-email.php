<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_speaker', [
  'email' => [
    'label' => 'my_extension.db:speaker.email',
    'l10n_mode' => 'exclude',
    'config' => [
      'type' => 'email',
      'eval' => 'uniqueInPid',
      'fieldInformation' => [
        'informationText' => [
          // Registered in ext_localconf.php
          'renderType' => 'informationText',
          'options' => [
            'text' => 'my_extension.db:speaker.email.information',
          ],
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_speaker',
  'email',
  '',
  'before:--div--;my_extension.db:tab.integration',
);
