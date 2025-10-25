<?php

return [
    'ctrl' => [
        'enablecolumns' => [
            'editlock' => 'editlock',
        ],
        // ...
    ],
    'palettes' => [
        'access' => [
            'showitem' => 'editlock',
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
