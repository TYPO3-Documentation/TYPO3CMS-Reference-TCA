<?php

use MyVendor\MyExtension\UserFunctions\MyItemsProcFunc;

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

    'vegetables' => [
      'label' => 'Vegetables',
      'config' => [
        'type' => 'check',
        'items' => [
          ['label' => 'Green tomatoes'],
          ['label' => 'Red peppers'],
        ],
      ],
    ],
    'checkbox_items_proc_func' => [
      'label' => 'Checkboxes with itemsProcFunc',
      'config' => [
        'type' => 'check',
        'items' => [
          ['label' => 'foo'],
          ['label' => 'bar'],
        ],
        'itemsProcFunc' => MyItemsProcFunc::class . '->itemsProcFunc',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, vegetables, checkbox_items_proc_func',
    ],
  ],
];
