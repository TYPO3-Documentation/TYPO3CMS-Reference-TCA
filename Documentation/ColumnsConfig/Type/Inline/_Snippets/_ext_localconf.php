<?php

use Myvendor\Myexample\FormEngine\FieldInformation\DemoFieldInformation;

// ...

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1654355506] = [
    'nodeName' => 'demoFieldInformation',
    'priority' => 30,
    'class' => DemoFieldInformation::class,
];
