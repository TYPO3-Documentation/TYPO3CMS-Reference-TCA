<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:blog_example/.../locallang_db.xlf:post_title',
        'label' => 'title',
        'type' => 'record_type',
        'typeicon_classes' => [
            '0' => 'tx-blog-post',
            'link' => 'tx-blog-post-link',
            'special' => 'tx-blog-post-special',
        ],
        // ...
    ],
    'types' => [
        '0' => [
            'showitem' => 'blog, title, date, author, content, comments, ',
        ],
        'link' => [
            'showitem' => ' blog, title, date, author, link, ',
        ],
        'special' => [
            'showitem' => 'blog, title, date, author, content, tags, comments, ',
        ],
    ],
    'columns' => [
        'record_type' => [
            'label' => 'LLL:EXT:blog_example/.../post_types',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'label' => 'Blog Post',
                        'value' => '0',
                    ],
                    [
                        'label' => 'Link to External Blog Post',
                        'value' => 'link',
                    ],
                    [
                        'label' => 'Special Blog Post',
                        'value' => 'special',
                    ],
                ],
                'default' => '0',
            ],
        ],
        // ...
    ],
];
