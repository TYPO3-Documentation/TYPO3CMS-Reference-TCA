<?php

use MyVendor\MyExtension\FormEngine\FieldInformation\DemoFieldInformation;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1654355506] = [
  'nodeName' => 'demoFieldInformation',
  'priority' => 30,
  'class' => DemoFieldInformation::class,
];
