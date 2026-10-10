<?php

defined('TYPO3') or die();

// The suggest wizard of the related content searches only the pages
// "Program" (6) and "News" (7) of this site, and four levels below them
$GLOBALS['TCA']['tx_myextension_conference']['columns']['related_content']['config']['suggestOptions']['default']['pidList'] = '6,7';
$GLOBALS['TCA']['tx_myextension_conference']['columns']['related_content']['config']['suggestOptions']['default']['pidDepth'] = 4;
