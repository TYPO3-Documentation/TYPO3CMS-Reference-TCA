<?php

use MyVendor\MyExtension\Controller\ConferenceController;
use MyVendor\MyExtension\Evaluation\AbstractEvaluation;
use MyVendor\MyExtension\Evaluation\HashtagEvaluation;
use MyVendor\MyExtension\Form\FieldInformation\TalkOrderInformation;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

ExtensionUtility::configurePlugin(
  'MyExtension',
  'ConferenceList',
  [ConferenceController::class => ['list', 'show']],
);

// Classes that TCA fields name in 'eval'
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals'][HashtagEvaluation::class] = '';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals'][AbstractEvaluation::class] = '';

// The information above the talks of a conference, see
// Configuration/TCA/Overrides/120-tx_myextension_conference-talks.php
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1791234567] = [
  'nodeName' => 'talkOrderInformation',
  'priority' => 30,
  'class' => TalkOrderInformation::class,
];
