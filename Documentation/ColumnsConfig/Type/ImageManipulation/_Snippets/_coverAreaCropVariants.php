<?php

$myCropVariantField = [
    'label' => 'Crop variant field',
    'config' => [
        'type' => 'imageManipulation',
        'cropVariants' => [
            'mobile' => [
                'title' => 'LLL:my_extension.db:imageManipulation.mobile',
                'coverAreas' => [
                    [
                        'x' => 0.05,
                        'y' => 0.85,
                        'width' => 0.9,
                        'height' => 0.1,
                    ],
                ],
            ],
        ],
    ],
];
