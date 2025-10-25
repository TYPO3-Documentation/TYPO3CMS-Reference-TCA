<?php

return [
    'ctrl' => [
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        // ...
    ],
    'palettes' => [
        'access' => [
            'showitem' => 'starttime, endtime',
        ],
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
                    --palette--;;access,
            ',
        ],
    ],
];
