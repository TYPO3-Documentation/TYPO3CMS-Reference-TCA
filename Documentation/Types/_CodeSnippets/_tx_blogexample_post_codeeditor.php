<?php

return [
  'ctrl' => [
    'title' => 'LLL:my_extension.db:tx_myextension_domain_model_post',
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
