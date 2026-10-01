<?php

return [
  'ctrl' => [
    'title' => 'Something',
    'label' => 'title',
  ],
  'columns' => [
    'title' => [
      'label' => 'Title',
      'config' => [
        'type' => 'input',
      ],
    ],

    'a_folder' => [
      'label' => 'A folder',
      'config' => [
        'type' => 'folder',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, a_folder',
    ],
  ],
];
