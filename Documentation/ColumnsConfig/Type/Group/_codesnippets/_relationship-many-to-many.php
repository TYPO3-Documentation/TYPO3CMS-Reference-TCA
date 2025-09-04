<?php

$TCA['tx_myextension_student']['columns']['courses'] = [
    'label' => 'Courses',
    'config' => [
        'type' => 'group',
        'allowed' => 'tx_myextension_course',
        'MM' => 'tx_myextension_student_course_mm',
        'relationship' => 'manyToMany',
    ],
];
