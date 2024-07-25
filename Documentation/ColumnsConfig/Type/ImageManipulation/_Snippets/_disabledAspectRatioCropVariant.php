<?php

$GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config'] = [
    'cropVariants' => [
        'default' => [
            'allowedAspectRatios' => [
                '4:3' => [
                    'disabled' => true,
                ],
            ],
        ],
    ],
];
