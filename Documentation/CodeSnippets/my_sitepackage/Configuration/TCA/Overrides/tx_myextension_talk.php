<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// The conferences of this site also address agencies, so the audience of
// a talk gets an item for them in the group of the business audience
ExtensionManagementUtility::addTcaSelectItem(
  'tx_myextension_talk',
  'audience',
  [
    'label' => 'my_sitepackage.db:talk.audience.agencies',
    'value' => 'agencies',
    'group' => 'business',
  ],
  'decision_makers',
  'after',
);
