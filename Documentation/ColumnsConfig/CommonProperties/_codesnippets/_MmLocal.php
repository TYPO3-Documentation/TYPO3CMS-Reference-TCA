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
    'my_field' => [
      'label' => 'My field',
      'config' => [
        'type' => 'group',
        'allowed' => 'tx_myextension_myfield_child',
        'MM' => 'tx_myextension_myfield_mm',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, my_field',
    ],
  ],
];
