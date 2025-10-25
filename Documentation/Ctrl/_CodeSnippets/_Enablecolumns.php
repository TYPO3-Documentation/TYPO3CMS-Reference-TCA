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
        'paletteHidden' => [
            'showitem' => '
                hidden
            ',
        ],
        'paletteAccess' => [
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
            'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                --linebreak--,
                fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
            ',
        ],
    ],
    'types' => [
        0 => [
            'showitem' => '
                --div--;core.form.tabs:general,
                    [...],
                --div--;core.form.tabs:access,
                    --palette--;;paletteHidden,
                    --palette--;;paletteAccess,
            ',
        ],
    ],
];
