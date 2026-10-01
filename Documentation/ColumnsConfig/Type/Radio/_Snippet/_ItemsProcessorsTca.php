<?php

use MyVendor\MyExtension\Processors\RadioItemsProcessor;

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

    'my_radio' => [
      'label' => 'Radio buttons with an item processor',
      'config' => [
        'type' => 'radio',
        'items' => [
          ['label' => 'Default', 'value' => 0],
        ],
        'itemsProcessors' => [
          100 => [
            'class' => RadioItemsProcessor::class,
          ],
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, my_radio',
    ],
  ],
];
