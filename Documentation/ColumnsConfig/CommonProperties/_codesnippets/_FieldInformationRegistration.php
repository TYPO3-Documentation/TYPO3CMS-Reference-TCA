<?php

use MyVendor\MyExtension\Backend\FieldInformation\TagInformation;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1552726986] = [
  'nodeName' => 'myExtensionTagInformation',
  'priority' => 40,
  'class' => TagInformation::class,
];
