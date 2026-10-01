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

    'simple_group' => [
      'label' => 'Simple group field',
      'config' => [
        'type' => 'group',
        'allowed' => 'tt_content',
        'elementBrowserEntryPoints' => [
          'tt_content' => 123,
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, simple_group',
    ],
  ],
];
