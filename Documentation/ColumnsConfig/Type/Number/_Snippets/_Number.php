<?php

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'in_range',
  ],
  'columns' => [
    'with_autocomplete' => [
      'label' => 'Integer field with autocomplete',
      'config' => [
        'type' => 'number',
        'size' => 20,
        'nullable' => true,
        'autocomplete' => true,
      ],
    ],

    'nullable_number' => [
      'label' => 'A nullable field',
      'config' => [
        'type' => 'number',
        'nullable' => true,
      ],
    ],

    'in_range' => [
      'label' => 'Number between 10 and 1000',
      'config' => [
        'type' => 'number',
        'range' => [
          'lower' => 10,
          'upper' => 1000,
        ],
      ],
    ],

    'percent' => [
      'label' => 'Percent (0-100)',
      'config' => [
        'type' => 'number',
        'range' => [
          'lower' => 0,
          'upper' => 100,
        ],
        'slider' => [
          'step' => 1,
        ],
      ],
    ],

    'unlimited' => [
      'label' => 'A number between 0 and 10 000',
      'config' => [
        'type' => 'number',
        'slider' => [
          'step' => 1,
        ],
      ],
    ],

    'decimal' => [
      'label' => 'Number field with decimal slider',
      'config' => [
        'type' => 'number',
        'format' => 'decimal',
        'range' => [
          'lower' => 0,
          'upper' => 1,
        ],
        'slider' => [
          'step' => 0.1,
        ],
      ],
    ],

    'with_value_picker' => [
      'label' => 'Number field',
      'config' => [
        'type' => 'number',
        'valuePicker' => [
          'items' => [
            ['label' => 'Ten', 'value' => 10],
            ['label' => 'Twenty', 'value' => 20],
            ['label' => 'Fifty', 'value' => 50],
            ['label' => 'One hundred', 'value' => 100],
          ],
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'in_range',
    ],
  ],
];
