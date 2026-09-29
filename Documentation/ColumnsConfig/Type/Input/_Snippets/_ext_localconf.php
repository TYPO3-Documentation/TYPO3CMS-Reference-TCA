<?php

use MyVendor\MyExtension\Evaluation\ExampleEvaluation;

// ....

// Register the class to be available in 'eval' of TCA
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals'][ExampleEvaluation::class] = '';
