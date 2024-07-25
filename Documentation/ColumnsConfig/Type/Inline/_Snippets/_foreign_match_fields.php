<?php

$GLOBALS['TCA']['ty_myext_company'] = [
    'columns' => [
        'employees' => [
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'ty_myext_person',
                'foreign_field' => 'company',
                'foreign_match_fields' => [
                    'role' => 'employee',
                ],
            ],
        ],
        'customers' => [
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'ty_myext_person',
                'foreign_field' => 'company',
                'foreign_match_fields' => [
                    'role' => 'customer',
                ],
            ],
        ],
    ],
];
