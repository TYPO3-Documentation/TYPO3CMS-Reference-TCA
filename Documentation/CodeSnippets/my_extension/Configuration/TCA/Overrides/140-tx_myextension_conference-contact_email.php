<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'contact_email' => [
    'label' => 'my_extension.db:conference.contact_email',
    'config' => [
      'type' => 'email',
      'placeholder' => 'info@example.org',
      // The addresses of the organizers to choose from
      'valuePicker' => [
        'items' => [
          [
            'label' => 'my_extension.db:conference.contact_email.info',
            'value' => 'info@example.org',
          ],
          [
            'label' => 'my_extension.db:conference.contact_email.program',
            'value' => 'program@example.org',
          ],
          [
            'label' => 'my_extension.db:conference.contact_email.sponsoring',
            'value' => 'sponsoring@example.org',
          ],
        ],
      ],
      'behaviour' => [
        'allowLanguageSynchronization' => true,
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'contact_email',
  '',
  'before:--div--;core.form.tabs:categories',
);
