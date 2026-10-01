<?php

return [
  'ctrl' => [
    'title' => 'Company',
    'label' => 'title',
  ],
  'columns' => [
    'title' => [
      'label' => 'Title',
      'config' => [
        'type' => 'input',
      ],
    ],

    'employees' => [
      'label' => 'Employees',
      'config' => [
        'type' => 'inline',
        'foreign_table' => 'tx_myextension_person',
        'foreign_field' => 'company',
        'foreign_match_fields' => [
          'role' => 'employee',
        ],
      ],
    ],

    'customers' => [
      'label' => 'Customers',
      'config' => [
        'type' => 'inline',
        'foreign_table' => 'tx_myextension_person',
        'foreign_field' => 'company',
        'foreign_match_fields' => [
          'role' => 'customer',
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, employees, customers',
    ],
  ],
];
