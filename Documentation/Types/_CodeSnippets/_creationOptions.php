<?php

$GLOBALS['TCA']['tt_content'] = array_merge_recursive(
    $GLOBALS['TCA']['tt_content'],
    [
        // ...
        'types' => [
            'div' => [
                'creationOptions' => [
                    'saveAndClose' => true,
                ],
                'defaultValues' => [
                    'bodytext' => '<p>some text</p>',
                ],
            ],
        ],
    ]
);
