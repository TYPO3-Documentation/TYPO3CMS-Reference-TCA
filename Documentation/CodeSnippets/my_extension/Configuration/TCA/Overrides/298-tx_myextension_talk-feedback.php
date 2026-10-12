<?php

use MyVendor\MyExtension\Backend\FeedbackCountFormatter;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// The feedback form of the website stores these values, the editors only
// read them
ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'feedback_opened' => [
    'label' => 'my_extension.db:talk.feedback_opened',
    'config' => [
      'type' => 'none',
      // For example "05/12/2027 (5 days)"
      'format' => 'date',
      'format.' => [
        'strftime' => true,
        'option' => '%x',
        'appendAge' => true,
      ],
    ],
  ],
  'rating' => [
    'label' => 'my_extension.db:talk.rating',
    'config' => [
      'type' => 'none',
      // The average of all ratings, for example "4.3"
      'format' => 'float',
      'format.' => [
        'precision' => 1,
      ],
    ],
  ],
  'feedback_count' => [
    'label' => 'my_extension.db:talk.feedback_count',
    'config' => [
      'type' => 'none',
      // For example "12 attendees"
      'format' => 'user',
      'format.' => [
        'userFunc' => FeedbackCountFormatter::class . '->format',
      ],
    ],
  ],
]);
$GLOBALS['TCA']['tx_myextension_talk']['palettes']['feedback'] = [
  'label' => 'my_extension.db:talk.feedback',
  'showitem' => 'feedback_opened, rating, feedback_count',
];
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  '--palette--;;feedback',
  '',
  'after:comments_closed',
);
