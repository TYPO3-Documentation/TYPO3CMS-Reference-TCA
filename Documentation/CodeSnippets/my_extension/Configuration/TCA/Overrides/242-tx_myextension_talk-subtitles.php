<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'subtitles' => [
    'label' => 'my_extension.db:talk.subtitles',
    // The recording is the same in all translations of the talk
    'l10n_mode' => 'exclude',
    'config' => [
      // A language field besides the language of the record. The item [All]
      // means that the recording has subtitles in every language of the site
      'type' => 'language',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'subtitles',
  'talk,keynote',
  'after:recording_allowed',
);
