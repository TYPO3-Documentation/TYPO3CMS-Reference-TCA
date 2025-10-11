<?php

return [
    'types' => [
        '0' => [
            'showitem' => '
            record_type, blog, title, date, author, content,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
                --palette--;;paletteStartStop,
                fe_group,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                 --palette--;;paletteLanguage,
            ',
        ],
    ],
    'palettes' => [
        'paletteStartStop' => [
            'showitem' => 'starttime, endtime',
        ],
        'paletteLanguage' => [
            'showitem' => 'sys_language_uid, l10n_parent',
        ],
    ],
];
