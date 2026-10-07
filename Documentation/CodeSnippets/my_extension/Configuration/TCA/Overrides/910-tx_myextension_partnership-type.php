<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// The type of a partnership is the format of the partner conference:
// the field "partner" points to the conference, and its field
// "event_format" holds the type
$GLOBALS['TCA']['tx_myextension_partnership']['ctrl']['type'] = 'partner:event_format';

// Another partner conference can have another format
$GLOBALS['TCA']['tx_myextension_partnership']['columns']['partner']['onChange'] = 'reload';

ExtensionManagementUtility::addTCAcolumns('tx_myextension_partnership', [
  'shared_livestream' => [
    'label' => 'my_extension.db:partnership.shared_livestream',
    'config' => [
      'type' => 'check',
      'renderType' => 'checkboxToggle',
    ],
  ],
]);

// An online partner conference shares its live stream instead of a
// discount. On-site and hybrid partner conferences fall back to type 0.
$GLOBALS['TCA']['tx_myextension_partnership']['types']['online'] = [
  'showitem' => 'conference, partner, shared_livestream',
];
