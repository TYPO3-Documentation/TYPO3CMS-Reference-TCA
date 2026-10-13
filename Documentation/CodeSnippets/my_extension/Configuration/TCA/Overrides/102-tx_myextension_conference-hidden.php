<?php

defined('TYPO3') or die();

// A new conference stays hidden until its program is complete. The Core
// creates the column "hidden", this file only changes its default value.
$GLOBALS['TCA']['tx_myextension_conference']['columns']['hidden']['config']['default'] = 1;
