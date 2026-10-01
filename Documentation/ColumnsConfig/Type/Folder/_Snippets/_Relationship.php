<?php

return [
  'ctrl' => [
    'title' => 'Gallery',
    'label' => 'title',
  ],
  'columns' => [
    'title' => [
      'label' => 'Title',
      'config' => [
        'type' => 'input',
      ],
    ],

    'folder' => [
      'label' => 'Folder',
      'config' => [
        'type' => 'folder',
        'relationship' => 'manyToOne',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, folder',
    ],
  ],
];
