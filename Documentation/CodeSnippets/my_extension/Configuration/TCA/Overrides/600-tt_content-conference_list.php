<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

// A group of its own in the content element wizard and the type select
ExtensionManagementUtility::addTcaSelectItemGroup(
  'tt_content',
  'CType',
  'conference',
  'my_extension.db:tt_content.group.conference',
  'after:plugins',
);

ExtensionUtility::registerPlugin(
  'MyExtension',
  'ConferenceList',
  'my_extension.db:plugin.conferencelist.title',
  'my-extension-conference-list',
  'conference',
  'my_extension.db:plugin.conferencelist.description',
  'FILE:EXT:my_extension/Configuration/FlexForms/ConferenceList.xml',
);
