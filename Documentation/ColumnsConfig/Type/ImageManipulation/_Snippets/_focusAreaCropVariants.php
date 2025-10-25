<?php

$myCropVariantField = [
    'label' => 'Crop variant field',
    'config' => [
        'type' => 'imageManipulation',
        'cropVariants' => [
            'mobile' => [
                'title' => 'LLL:my_extension.db:imageManipulation.mobile',
                'focusArea' => [
                    'x' => 1 / 3,
                    'y' => 1 / 3,
                    'width' => 1 / 3,
                    'height' => 1 / 3,
                ],
            ],
        ],
    ],
];
