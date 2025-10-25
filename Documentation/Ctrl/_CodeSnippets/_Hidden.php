<?php

return [
    'ctrl' => [
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        // ...
    ],
    'palettes' => [
        'visibility' => [
            'showitem' => 'hidden',
        ],
    ],
    'types' => [
        0 => [
            'showitem' => '
                --div--;core.form.tabs:general,
                    [...],
                --div--;core.form.tabs:access,
                    --palette--;;visibility,
            ',
        ],
    ],
];
