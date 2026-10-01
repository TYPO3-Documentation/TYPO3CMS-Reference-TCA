<?php

defined('TYPO3') or die();

$GLOBALS['TCA']['fe_users']['columns']['password']['config']['fieldControl']
  ['passwordGenerator']['options']['passwordPolicy'] = 'myCustomPolicy';
