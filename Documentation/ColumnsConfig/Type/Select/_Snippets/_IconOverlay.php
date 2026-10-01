<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addRecordType(
  [
    'label' => 'my_extension.messages:my_element.title',
    'value' => 'my_element',
    'icon' => 'content-header',
    'iconOverlay' => 'actions-approve',
    'group' => 'default',
  ],
  '--palette--;;headers',
);
