<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:blog_example/.../locallang_db.xlf:post_title',
        // ...
    ],
    'types' => [
        'special' => [
            'columnsOverrides' => [
                'author' => [
                    'config' => [
                        'required' => true,
                    ],
                ],
                'content' => [
                    'description' => 'You can use Markdown syntax for the content. ',
                    'config' => [
                        'renderType' => 'codeEditor',
                    ],
                ],
            ],
            'showitem' => 'blog, title, date, author, content, tags, comments, ',
        ],
        // ...
    ],
    // ...
];
