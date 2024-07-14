<?php

$GLOBALS['TCA'][$someTable]['columns'][$someLanguageField] = [
    'label' => 'Some language field',
    'config' => [
        'type' => 'language',
    ],
];
