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
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
            'showitem' => '
                editlock
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
