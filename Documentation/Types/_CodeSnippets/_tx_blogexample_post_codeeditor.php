<?php

return [
    'ctrl' => [
        'title' => 'LLL:blog_example.db:tx_blogexample_domain_model_post',
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
