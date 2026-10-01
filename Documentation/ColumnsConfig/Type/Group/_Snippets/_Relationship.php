<?php

return [
  'ctrl' => [
    'title' => 'Course',
    'label' => 'title',
  ],
  'columns' => [
    'title' => [
      'label' => 'Title',
      'config' => [
        'type' => 'input',
      ],
    ],

    'teacher' => [
      'label' => 'Teacher',
      'config' => [
        'type' => 'group',
        'allowed' => 'tx_myextension_teacher',
        'relationship' => 'manyToOne',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, teacher',
    ],
  ],
];
