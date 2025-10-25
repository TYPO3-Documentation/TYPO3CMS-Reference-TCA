<?php

$GLOBALS['TCA']['pages']['columns']['my_own_column'] = [
    'label' => 'My own column',
    'description' => 'LLL:my_extension.tca:pages.my_own_column.description',
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
