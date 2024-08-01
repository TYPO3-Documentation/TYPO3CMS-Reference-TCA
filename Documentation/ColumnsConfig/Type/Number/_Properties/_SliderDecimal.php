<?php

$temporaryColumns['numberField'] = [
    'label' => 'Number field with decimal slider',
    'config' => [
        'type' => 'number',
        'format' => 'decimal',
        'range' => [
            'lower' => 0,
            'upper' => 1,
        ],
        'slider' => [
            'step' => 0.1,
        ],
    ],
];
