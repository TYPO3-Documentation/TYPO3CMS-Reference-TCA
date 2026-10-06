<?php

use MyVendor\MyExtension\Slug\ConferenceSlugModifier;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'slug' => [
    'label' => 'my_extension.db:conference.slug',
    'config' => [
      'type' => 'slug',
      'generatorOptions' => [
        // The short title, or the title if there is no short title
        'fields' => [['short_title', 'title']],
        'replacements' => [
          '&' => 'and',
        ],
        'regexReplacements' => [
          // A year at the end of the title, the modifier adds it in front
          '/\s+\d{4}$/' => '',
        ],
        'postModifiers' => [
          ConferenceSlugModifier::class . '->prependYear',
        ],
      ],
      'fallbackCharacter' => '-',
      'eval' => 'uniqueInSite',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'slug',
  '',
  'after:title',
);
