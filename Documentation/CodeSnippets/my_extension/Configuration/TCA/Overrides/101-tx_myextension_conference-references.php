<?php

defined('TYPO3') or die();

// Above the form of a conference, show how many records refer to it
$GLOBALS['TCA']['tx_myextension_conference']['ctrl']['container']['formWrapContainer']
  ['fieldWizard']['referencesToThisRecord'] = [
    // Registered in ext_localconf.php
    'renderType' => 'referencesToThisRecord',
  ];
