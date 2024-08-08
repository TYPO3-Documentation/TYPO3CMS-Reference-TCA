<?php

$selectField = [
    'label' => 'select_field',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            [
                'label' => 'static item 1',
                'value' => 'static-1',
                'group' => 'group1',
            ],
        ],
        'itemGroups' => [
            'group1' => 'Group 1 with items',
            'group2' => 'Group 2 from foreign table',
        ],
        'foreign_table' => 'tx_myextension_foreign_table',
        'foreign_table_item_group' => 'itemgroup',
    ],
];
