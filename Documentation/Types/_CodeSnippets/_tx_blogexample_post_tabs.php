<?php

return [
    'types' => [
        '0' => [
            'showitem' => '
            record_type, blog, title, date, author, content,
            --div--;core.form.tabs:access,
                hidden,
                --palette--;;paletteStartStop,
                fe_group,
            --div--;core.form.tabs:language,
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
