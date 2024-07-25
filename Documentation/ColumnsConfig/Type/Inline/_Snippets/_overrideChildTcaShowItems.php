<?php

$GLOBALS['TCA']['tt_content']['columns']['anInlineField'] = [
    'config' => [
        'type' => 'inline',
        'overrideChildTca' => [
            'types' => [
                'aForeignType' => [
                    'showitem' => 'aChildField',
                ],
            ],
        ],
    ],
];
