<?php

return [
    'ctrl' => [
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'translationSource' => 'l10n_source',
        // ...
    ],
    'palettes' => [
        'language' => [
            'showitem' => '
                sys_language_uid,l10n_parent,
            ',
        ],
    ],
    'types' => [
        0 => [
            'showitem' => '
                --div--;core.form.tabs:general,
                    [...],
                --div--;core.form.tabs:language,
                    --palette--;;language,
            ',
        ],
    ],
];
