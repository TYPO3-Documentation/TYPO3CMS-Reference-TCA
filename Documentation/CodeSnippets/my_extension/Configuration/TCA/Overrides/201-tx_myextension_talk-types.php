<?php

defined('TYPO3') or die();

// The title of the record type in the "Create new record" dialog
$GLOBALS['TCA']['tx_myextension_talk']['types']['workshop']['title'] = 'my_extension.db:talk.talk_type.workshop';
$GLOBALS['TCA']['tx_myextension_talk']['types']['keynote']['title'] = 'my_extension.db:talk.talk_type.keynote';

// A keynote is known by its speaker, a workshop by its room
$GLOBALS['TCA']['tx_myextension_talk']['types']['keynote']['label_alt'] = 'speaker';
$GLOBALS['TCA']['tx_myextension_talk']['types']['keynote']['label_alt_force'] = true;
$GLOBALS['TCA']['tx_myextension_talk']['types']['workshop']['label_alt'] = 'room';
$GLOBALS['TCA']['tx_myextension_talk']['types']['workshop']['label_alt_force'] = true;
