<?php

defined('TYPO3') or die();

$GLOBALS['TCA']['tx_myextension_mytable']['columns']['my_json']['config']
  ['behaviour']['allowLanguageSynchronization'] = true;
