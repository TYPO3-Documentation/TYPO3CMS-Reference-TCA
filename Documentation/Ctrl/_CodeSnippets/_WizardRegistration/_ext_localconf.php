<?php

declare(strict_types=1);

use MyVendor\MyExtension\FormEngine\FieldWizard\ReferencesToThisRecordWizard;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1486488059] = [
    'nodeName' => 'ReferencesToThisRecordWizard',
    'priority' => 40,
    'class' => ReferencesToThisRecordWizard::class,
];
