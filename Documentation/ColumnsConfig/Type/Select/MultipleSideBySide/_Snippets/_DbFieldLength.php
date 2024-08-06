<?php

$selectField = [
    'label' => 'My field',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectMultipleSideBySide',
        'items' => [
            ['label' => '', 'value' => ''],
            ['label' => 'Some label', 'value' => 'some'],
            ['label' => 'Another label', 'value' => 'another'],
        ],
        'default' => '',
        'dbFieldLength' => 10,
    ],
];
