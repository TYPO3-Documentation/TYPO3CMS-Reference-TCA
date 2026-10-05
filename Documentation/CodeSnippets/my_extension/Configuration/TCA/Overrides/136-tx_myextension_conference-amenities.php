<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'amenities' => [
    'label' => 'my_extension.db:conference.amenities',
    'config' => [
      'type' => 'check',
      'items' => [
        ['label' => 'my_extension.db:conference.amenities.catering'],
        ['label' => 'my_extension.db:conference.amenities.childcare'],
        ['label' => 'my_extension.db:conference.amenities.live_stream'],
        ['label' => 'my_extension.db:conference.amenities.wheelchair_access'],
      ],
      'cols' => 3,
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'amenities',
  '',
  'after:ticketing_secret',
);
