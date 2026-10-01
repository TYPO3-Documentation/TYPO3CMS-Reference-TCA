<?php

use MyVendor\MyExtension\Processors\CheckItemsProcessor;
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
    'checkbox_items_processors' => [
      'label' => 'Checkboxes with an item processor',
      'config' => [
        'type' => 'check',
        'itemsProcessors' => [
          100 => [
            'class' => CheckItemsProcessor::class,
          ],
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, vegetables, checkbox_items_proc_func,'
        . ' checkbox_items_processors',
    ],
  ],
];
