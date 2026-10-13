<?php

defined('TYPO3') or die();

// The hotels of this site are stored in one folder outside of the web
// mounts of the editors, who still add the hotels to their conferences
$GLOBALS['TCA']['tx_myextension_hotel']['ctrl']['security']['ignoreWebMountRestriction'] = true;
