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

    'identifier' => [
      'label' => 'My record identifier',
      'config' => [
        'type' => 'uuid',
        'version' => 6,
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, identifier',
    ],
  ],
];
