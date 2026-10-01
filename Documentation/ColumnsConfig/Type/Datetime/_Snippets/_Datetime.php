<?php

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'my_date',
  ],
  'columns' => [
    'my_date' => [
      'label' => 'Datetime field',
      'config' => [
        'type' => 'datetime',
        'format' => 'date',
        'default' => 0,
      ],
    ],

    'meteor_impact' => [
      'label' => 'Time of estimated impact',
      'config' => [
        'type' => 'datetime',
        'format' => 'datetimesec',
        // Can also be omitted for integer-based storage
        'dbType' => 'datetime',
        // Can also be false
        'nullable' => true,
      ],
    ],

    'synced_at' => [
      'label' => 'Synchronized at',
      'config' => [
        'type' => 'datetime',
        'dbType' => 'datetime',
        'nullable' => true,
      ],
    ],

    'synced_time' => [
      'label' => 'Synchronized at (time)',
      'config' => [
        'type' => 'datetime',
        'dbType' => 'time',
        'format' => 'time',
        'nullable' => true,
      ],
    ],

    'nullable_date' => [
      'label' => 'A nullable date',
      'config' => [
        'type' => 'datetime',
        'nullable' => true,
      ],
    ],

    'with_placeholder' => [
      'label' => 'My datetime field',
      'config' => [
        'type' => 'datetime',
        'placeholder' => gmmktime(0, 0, 0, 1, 1, 2024),
        'mode' => 'useOrOverridePlaceholder',
      ],
    ],

    'in_range' => [
      'label' => 'Date between 2014 and 2022',
      'config' => [
        'type' => 'datetime',
        'range' => [
          'upper' => gmmktime(23, 59, 59, 12, 31, 2022),
          'lower' => gmmktime(0, 0, 0, 1, 1, 2014),
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'my_date',
    ],
  ],
];
