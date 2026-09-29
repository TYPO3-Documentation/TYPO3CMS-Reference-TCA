<?php

defined('TYPO3') or die();

$GLOBALS['TCA']['tx_myextension_mytable']['columns']['irre_records']['config']
  ['appearance']['overwriteCombinationWarningMessage']
  = 'LLL:EXT:my_extension/Resources/Private/Language/locallang_db.xlf:my_message';
