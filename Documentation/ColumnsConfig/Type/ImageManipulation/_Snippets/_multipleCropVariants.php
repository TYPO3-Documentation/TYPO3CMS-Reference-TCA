<?php

$multipleCropVariantField = [
    'label' => 'Field with multiple crop variants',
    'config' => [
        'type' => 'imageManipulation',
        'cropVariants' => [
            'mobile' => [
                'title' => 'LLL:my_extension.db:imageManipulation.mobile',
                'allowedAspectRatios' => [
                    '4:3' => [
                        'title' => 'LLL:core.wizards:imwizard.ratio.4_3',
                        'value' => 4 / 3,
                    ],
                    'NaN' => [
                        'title' => 'LLL:core.wizards:imwizard.ratio.free',
                        'value' => 0.0,
                    ],
                ],
            ],
            'desktop' => [
                'title' => 'LLL:my_extension.db:imageManipulation.desktop',
                'allowedAspectRatios' => [
                    '4:3' => [
                        'title' => 'LLL:core.wizards:imwizard.ratio.4_3',
                        'value' => 4 / 3,
                    ],
                    'NaN' => [
                        'title' => 'LLL:core.wizards:imwizard.ratio.free',
                        'value' => 0.0,
                    ],
                ],
            ],
        ],
    ],
];
