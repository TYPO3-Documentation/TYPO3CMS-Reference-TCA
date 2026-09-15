<?php

$TCA['tx_myextension_course']['columns']['teacher'] = [
    'label' => 'Teacher',
    'config' => [
        'type' => 'group',
        'allowed' => 'tx_myextension_teacher',
        // The same teacher can teach several courses
        'relationship' => 'manyToOne',
    ]
];