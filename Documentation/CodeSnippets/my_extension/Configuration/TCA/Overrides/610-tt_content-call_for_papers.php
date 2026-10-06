<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// Add the content element to the "Type" dropdown, with the predefined
// fields on the "General" tab
ExtensionManagementUtility::addRecordType(
  [
    'label' => 'my_extension.db:tt_content.call_for_papers',
    'value' => 'myextension_callforpapers',
    'icon' => 'content-text',
    'group' => 'conference',
  ],
  '--palette--;;headers, bodytext',
);
