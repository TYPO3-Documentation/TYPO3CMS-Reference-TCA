<?php

$GLOBALS['TCA']['pages']['columns']['canonical_link'] = [
    'exclude' => true,
    'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.canonical_link',
    'description' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.canonical_link.description',
    'displayCond' => 'FIELD:no_index:=:0',
    'config' => [
        'type' => 'link',
        'allowedTypes' => ['page', 'url', 'record'],
        'size' => 50,
        'appearance' => [
            'browserTitle' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.canonical_link',
            'allowedOptions' => ['params', 'rel'],
        ],
    ],
];
