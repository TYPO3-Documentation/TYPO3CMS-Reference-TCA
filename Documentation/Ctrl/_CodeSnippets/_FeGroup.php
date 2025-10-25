<?php

return [
    'ctrl' => [
        'enablecolumns' => [
            'fe_group' => 'fe_group',
        ],
        // ...
    ],
    'palettes' => [
        'access' => [
            'label' => 'LLL:core.form.tabs:access',
            'showitem' => '
                fe_group,
            ',
        ],
    ],
    'types' => [
        0 => [
            'showitem' => '
                --div--;core.form.tabs:general,
                    [...],
                --div--;core.form.tabs:access,
                    --palette--;;access,
            ',
        ],
    ],
];
