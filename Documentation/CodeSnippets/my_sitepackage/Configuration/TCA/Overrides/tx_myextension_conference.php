<?php

defined('TYPO3') or die();

// The suggest wizard of the related content searches only the pages
// "Program" (6) and "News" (7) of this site, and four levels below them
$GLOBALS['TCA']['tx_myextension_conference']['columns']['related_content']['config']['suggestOptions']['default']['pidList'] = '6,7';
$GLOBALS['TCA']['tx_myextension_conference']['columns']['related_content']['config']['suggestOptions']['default']['pidDepth'] = 4;

// The layout of this site shows the impressions of a conference in 16:9
// only, so the free ratio of the extension is not available
$GLOBALS['TCA']['tx_myextension_conference']['columns']['impressions']['config']
  ['overrideChildTca']['columns']['crop']['config']['cropVariants']['desktop']
  ['allowedAspectRatios']['NaN']['disabled'] = true;
