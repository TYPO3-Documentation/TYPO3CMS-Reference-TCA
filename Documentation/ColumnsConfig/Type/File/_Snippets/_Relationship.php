<?php

return [
  'ctrl' => [
    'title' => 'Teaser',
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
      'label' => 'Image',
      'config' => [
        'type' => 'file',
        'allowed' => 'common-image-types',
        'relationship' => 'manyToOne',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, image',
    ],
  ],
];
