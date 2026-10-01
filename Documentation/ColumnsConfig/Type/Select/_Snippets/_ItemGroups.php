<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTcaSelectItemGroup(
  'tt_content',
  'CType',
  'sliders',
  'LLL:my_extension.db:tt_content.group.sliders',
  'after:lists',
);

ExtensionManagementUtility::addTcaSelectItem(
  'tt_content',
  'CType',
  [
    'label' => 'LLL:my_extension.db:tt_content.CType.slickslider',
    'value' => 'slickslider',
    'icon' => 'EXT:my_extension/Resources/Public/Icons/slickslider.png',
    'group' => 'sliders',
  ],
);
