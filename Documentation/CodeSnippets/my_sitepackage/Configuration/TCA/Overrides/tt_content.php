<?php

defined('TYPO3') or die();

// The translators of this site write the headers of content elements
// themselves, so a translation starts with an unchanged copy of the header
$GLOBALS['TCA']['tt_content']['columns']['header']['l10n_mode'] = '';

// The editors of this site call a conference an event. The "New content
// element" wizard shows the teaser of the conference extension with the
// title they know.
$GLOBALS['TCA']['tt_content']['types']['myextension_conferenceteaser']['creationOptions']['title']
  = 'my_sitepackage.db:tt_content.conference_teaser.wizard_title';
