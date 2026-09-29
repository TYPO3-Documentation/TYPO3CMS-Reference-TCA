<?php

defined('TYPO3') or die();

$GLOBALS['TCA']['tx_myextension_mytable']['columns']['irre_records']['config']
  ['appearance']['overwriteCombinationWarningMessage']
  = 'LLL:my_extension.db:my_message';
