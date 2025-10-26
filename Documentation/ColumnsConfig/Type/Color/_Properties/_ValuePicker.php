<?php

$temporaryColumns['my_color'] = [
    'label' => 'Highlight color',
    'config' => [
        'type' => 'color',
        'required' => true,
        'valuePicker' => [
            'items' => [
                ['label' => 'TYPO3 orange', 'value' => '#FF8700'],
                ['label' => 'Black',        'value' => '#000000'],
                ['label' => 'White',        'value' => '#FFFFFF'],
            ],
        ],
    ],
];
