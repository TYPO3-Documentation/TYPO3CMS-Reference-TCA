<?php

return [
  'ctrl' => [
    'title' => 'LLL:my_extension.db:tx_myextension_domain_model_post',
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
