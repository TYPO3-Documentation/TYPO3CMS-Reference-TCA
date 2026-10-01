<?php

defined('TYPO3') or die();

$GLOBALS['TCA']['tx_myextension_event']['columns']['speakers']['config']
  ['overrideChildTca']['columns']['speaker']['config']
  ['elementBrowserEntryPoints']['tx_myextension_person'] = 42;
