<?php

use MyVendor\MyExtension\Controller\ConferenceController;
use MyVendor\MyExtension\Evaluation\AbstractEvaluation;
use MyVendor\MyExtension\Evaluation\HashtagEvaluation;
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
