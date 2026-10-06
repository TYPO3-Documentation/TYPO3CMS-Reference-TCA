<?php

use MyVendor\MyExtension\Utility\MyCustomValue;

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'date_field',
  ],
  'columns' => [
    'date_field' => [
      'label' => 'Date',
      'config' => [
        'type' => 'none',
        'format' => 'date',
        'format.' => [
          'strftime' => true,
          'option' => '%x',
        ],
      ],
    ],

    'float_field' => [
      'label' => 'Float',
      'config' => [
        'type' => 'none',
        'format' => 'float',
        'format.' => [
          'precision' => 8,
        ],
      ],
    ],

    'user_field' => [
      'label' => 'Custom value',
      'config' => [
        'type' => 'none',
        'format' => 'user',
        'format.' => [
          'userFunc' => MyCustomValue::class . '->getValue',
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'date_field, float_field, user_field',
    ],
  ],
];
