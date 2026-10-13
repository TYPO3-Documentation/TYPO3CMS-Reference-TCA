<?php

use TYPO3\CMS\Core\Domain\Repository\PageRepository;

defined('TYPO3') or die();

// The page lists of this site show the summary of each page, so the page
// wizard asks for it right after the title
$GLOBALS['TCA']['pages']['types'][(string)PageRepository::DOKTYPE_DEFAULT]['wizardSteps']['summary'] = [
  'title' => 'my_sitepackage.db:pages.wizard_step.summary',
  'fields' => ['abstract'],
  'after' => ['setup'],
];
