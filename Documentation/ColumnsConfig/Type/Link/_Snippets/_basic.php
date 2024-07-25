<?php

return [
    // ...
    'columns' => [
        'a_link_field' => [
            'label' => 'Link',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['page', 'url', 'record'],
            ],
        ],
    ],
];
