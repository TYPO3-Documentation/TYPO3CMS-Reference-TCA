<?php

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'email_unique',
  ],
  'columns' => [
    'email_autocomplete' => [
      'label' => 'Email with autocomplete',
      'config' => [
        'type' => 'email',
        'size' => 20,
        'nullable' => true,
        'autocomplete' => true,
      ],
    ],

    'email_unique' => [
      'label' => 'Unique email',
      'config' => [
        'type' => 'email',
        'eval' => 'uniqueInPid',
      ],
    ],

    'email_placeholder' => [
      'label' => 'My email field',
      'config' => [
        'type' => 'email',
        'placeholder' => 'info@example.com',
        'mode' => 'useOrOverridePlaceholder',
      ],
    ],

    'email_nullable' => [
      'label' => 'A nullable email',
      'config' => [
        'type' => 'email',
        'nullable' => true,
        'eval' => 'uniqueInPid',
      ],
    ],

    'with_value_picker' => [
      'label' => 'Email field with value picker',
      'config' => [
        'type' => 'email',
        'valuePicker' => [
          'items' => [
            ['no-reply', 'no-reply@example.org'],
            ['mail', 'mail@example.org'],
            ['abuse', 'abuse@example.org'],
            ['postmaster', 'postmaster@example.org'],
          ],
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'email_unique',
    ],
  ],
];
