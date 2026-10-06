<?php

use MyVendor\MyExtension\Controller\ConferenceController;
use MyVendor\MyExtension\Evaluation\AbstractEvaluation;
use MyVendor\MyExtension\Evaluation\HashtagEvaluation;
use MyVendor\MyExtension\Form\Element\BadgeNameElement;
use MyVendor\MyExtension\Form\FieldInformation\InformationText;
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

// The badge name of a frontend user, see
// Configuration/TCA/Overrides/650-fe_users-tx_myextension_badge_name.php
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1791300000] = [
  'nodeName' => 'badgeName',
  'priority' => 40,
  'class' => BadgeNameElement::class,
];

// The information text of fields, see for example
// Configuration/TCA/Overrides/310-tx_myextension_speaker-email.php
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1791310000] = [
  'nodeName' => 'informationText',
  'priority' => 30,
  'class' => InformationText::class,
];
