<?php

$GLOBALS['TCA']['pages']['columns']['canonical_link'] = [
    'exclude' => true,
    'label' => 'LLL:seo.tca:pages.canonical_link',
    'description' => 'LLL:seo.tca:pages.canonical_link.description',
    'displayCond' => 'FIELD:no_index:=:0',
    'config' => [
        'type' => 'link',
        'allowedTypes' => ['page', 'url', 'record'],
        'size' => 50,
        'appearance' => [
            'browserTitle' => 'LLL:seo.tca:pages.canonical_link',
            'allowedOptions' => ['params', 'rel'],
        ],
    ],
];
