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
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    [...],
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;visibility,
            ',
        ],
    ],
];
