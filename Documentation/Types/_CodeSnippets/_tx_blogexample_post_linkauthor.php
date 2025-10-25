<?php

return [
    'ctrl' => [
        'title' => 'LLL:blog_example.db:tx_blogexample_domain_model_post',
        // ...
    ],
    'types' => [
        'link' => [
            'showitem' => 'blog, title, date, author, link, ',
            'creationOptions' => [
                'defaultValues' => [
                    'author' => 'External Author',
                ],
            ],
        ],
        // ...
    ],
    // ...
];
