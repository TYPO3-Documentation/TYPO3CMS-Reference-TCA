<?php

$GLOBALS['TCA']['pages']['columns']['my_own_column'] = [
    'label' => 'My own column',
    'description' => 'LLL:EXT:my_extkey/Resources/Private/Language/locallang_tca.xlf:pages.my_own_column.description',
    'config' => [
        'type' => 'input',
        'renderType' => 'mySpecialRenderingForInputElements',
        'default' => '',
        'fieldInformation' => [
            'tcaDescription' => [
                'renderType' => 'tcaDescription',
            ],
        ],
    ],
];
