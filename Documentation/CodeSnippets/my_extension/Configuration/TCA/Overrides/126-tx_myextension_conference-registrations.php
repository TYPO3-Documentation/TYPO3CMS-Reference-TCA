<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'registrations' => [
    'label' => 'my_extension.db:conference.registrations',
    'config' => [
      'type' => 'inline',
      'foreign_table' => 'tx_myextension_registration',
      'foreign_field' => 'conference',
      'foreign_selector' => 'attendee',
      'foreign_unique' => 'attendee',
      'foreign_match_fields' => [
        'status' => 'confirmed',
      ],
      'appearance' => [
        'useCombination' => true,
        'overwriteCombinationWarningMessage' => 'my_extension.db:conference.registrations.combinationWarning',
      ],
      'overrideChildTca' => [
        'columns' => [
          'attendee' => [
            'config' => [
              // The frontend users are stored in the same folder as the conferences
              'elementBrowserEntryPoints' => [
                'fe_users' => '###CURRENT_PID###',
              ],
            ],
          ],
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  '--div--;my_extension.db:tab.registrations, registrations',
  '',
  'before:--div--;my_extension.db:tab.details',
);
