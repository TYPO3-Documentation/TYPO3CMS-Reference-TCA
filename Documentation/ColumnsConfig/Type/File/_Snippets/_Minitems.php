<?php

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'title',
  ],
  'columns' => [
    'title' => [
      'label' => 'Title',
      'config' => [
        'type' => 'input',
      ],
    ],

    'image' => [
      'label' => 'My one and only image',
      'config' => [
        'type' => 'file',
        'minitems' => 1,
        'maxitems' => 1,
        'allowed' => 'common-image-types',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, image',
    ],
  ],
];
