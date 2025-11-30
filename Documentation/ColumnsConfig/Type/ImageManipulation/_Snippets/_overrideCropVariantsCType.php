<?php

$GLOBALS['TCA']['tt_content']['types']['textpic']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config'] = [
    'cropVariants' => [
        'mobile' => [
            'title' => 'LLL:my_extension.db:imageManipulation.mobile',
            'cropArea' => [
                'x' => 0.1,
                'y' => 0.1,
                'width' => 0.8,
                'height' => 0.8,
            ],
        ],
    ],
];
