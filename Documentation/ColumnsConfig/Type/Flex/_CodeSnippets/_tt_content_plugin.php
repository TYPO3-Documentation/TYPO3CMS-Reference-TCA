<?php

declare(strict_types=1);
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

$pluginKey = ExtensionUtility::registerPlugin(
  'my_extension',
  'BlogList',
  'List of blogs',
  'my_extension_bloglist',
  'plugins',
  'Display a list of blogs',
);

ExtensionManagementUtility::addToAllTCAtypes(
  'tt_content',
  '--div--;Configuration,pi_flexform',
  $pluginKey,
  'after:subheader',
);

ExtensionManagementUtility::addPiFlexFormValue(
  '*',
  'FILE:EXT:my_extension/Configuration/FlexForms/PluginSettings.xml',
  $pluginKey,
);
