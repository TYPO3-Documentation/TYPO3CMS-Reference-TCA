<?php

use MyVendor\MyExtension\Form\Element\SpecialFieldElement;

defined('TYPO3') or die();

// Use the current timestamp as key
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1727791200] = [
  'nodeName' => 'specialField',
  'priority' => 40,
  'class' => SpecialFieldElement::class,
];
