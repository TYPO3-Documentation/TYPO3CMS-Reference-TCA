<?php

return [
    'ctrl' => [
        'title' => 'My workspace aware table',
        'versioningWS' => true,
        // ...
    ],
    'columns' => [
        'some_field' => [
            'label' => 'Some field',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_myextension_mychild',
                'foreign_field' => 'parentid',
            ],
        ]
    ]
];
