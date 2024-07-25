<?php

$GLOBALS['TCA']['tt_content']['columns']['anInlineField'] =  [
    'config' => [
        'type' => 'inline',
        'overrideChildTca' => [
            'columns' => [
                'CType' => [
                    'config' => [
                        'default' => 'image',
                    ],
                ],
            ],
        ],
    ],
];
