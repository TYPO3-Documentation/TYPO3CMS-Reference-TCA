<?php

$allowedFileExtensions = 'png,svg';

$GLOBALS['TCA']['tt_content']['columns']['anInlineField'] = [
    'config' => [
        'type' => 'inline',
        'foreign_selector' => 'uid_local',
        'overrideChildTca' => [
            'columns' => [
                'uid_local' => [
                    'config' => [
                        'appearance' => [
                            'elementBrowserType' => 'file',
                            'elementBrowserAllowed' => $allowedFileExtensions,
                        ],
                    ],
                ],
            ],
        ],
    ],
];
