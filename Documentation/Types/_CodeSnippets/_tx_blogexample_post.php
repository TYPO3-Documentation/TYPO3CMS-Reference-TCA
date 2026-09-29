<?php

return [
  'ctrl' => [
    'title' => 'LLL:my_extension.db:tx_myextension_domain_model_post',
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
      'title' =>  'LLL:my_extension.db:link.title',
      'showitem' => ' blog, title, date, author, link, ',
    ],
    'special' => [
      'title' =>  'LLL:my_extension.db:special.title',
      'showitem' => 'blog, title, date, author, content, tags, comments, ',
    ],
  ],
  'columns' => [
    'record_type' => [
      'label' => 'LLL:my_extension.labels:post_types',
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
