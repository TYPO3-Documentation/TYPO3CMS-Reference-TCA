<?php

$defaultCropVariants = [
    'default' => [
        'title' => 'LLL:core.wizards:imwizard.crop_variant.default',
        'allowedAspectRatios' => [
            '16:9' => [
                'title' => 'LLL:core.wizards:imwizard.ratio.16_9',
                'value' => 16 / 9,
            ],
            '3:2' => [
                'title' => 'LLL:core.wizards:imwizard.ratio.3_2',
                'value' => 3 / 2,
            ],
            '4:3' => [
                'title' => 'LLL:core.wizards:imwizard.ratio.4_3',
                'value' => 4 / 3,
            ],
            '1:1' => [
                'title' => 'LLL:core.wizards:imwizard.ratio.1_1',
                'value' => 1.0,
            ],
            'NaN' => [
                'title' => 'LLL:core.wizards:imwizard.ratio.free',
                'value' => 0.0,
            ],
        ],
        'selectedRatio' => 'NaN',
        'cropArea' => [
            'x' => 0.0,
            'y' => 0.0,
            'width' => 1.0,
            'height' => 1.0,
        ],
    ],
];
